<?php
             
$ftp_server = "ftp.riverslawyers.com.au";
$ftp_user_name = "river936";
$ftp_user_pass = "rivers";

// set up a connection or die
$conn_id = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server"); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to login
if ($login_result) {
    echo "Connected as $ftp_user_name@$ftp_server\n";

    // get contents of the current directory
    putenv('TMPDIR=/tmp/');
    $contents = ftp_nlist($conn_id, "/public_html/testsite/news");

    $ftp_path = '/public_html/testsite/news/' . (string) (count($contents));
    ftp_mkdir($conn_id, $ftp_path);
    $news_local_path = $_FILES["newsImage"]["tmp_name"];

    // Check if image file is a actual image or fake image
    $uploadOk = 1;
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["newsImage"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check file size
    if ($_FILES["newsImage"]["size"] > 1000000) {
        echo "Sorry, your image file is too large. Size limit < 1MB.";
        $uploadOk = 0;
    }
    if ($_FILES["newsContent"]["size"] > 100000) {
        echo "Sorry, your text file is too large. Size limit < 100KB.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        $ftp_imgfile = $ftp_path . '/' . basename( $_FILES["newsImage"]["name"]);
        $ftp_txtfile = $ftp_path . '/' . basename( $_FILES["newsContent"]["name"]);
        // perform image file upload
        if(ftp_put($conn_id, $ftp_imgfile, $news_local_path, FTP_ASCII)){
            echo "The image file ". basename( $_FILES["newsImage"]["name"]). " has been uploaded.";
        } else {
            echo "Image file upload failed.";
        }
        // perform content file upload
        if(ftp_put($conn_id, $ftp_txtfile, $news_local_path, FTP_ASCII)){
            echo "The text file ". basename( $_FILES["newsContent"]["name"]). " has been uploaded.";
        } else {
            echo "Text file upload failed.";
        }
    }
    
} else {
    echo "Couldn't connect as $ftp_user_name\n";
}

// close the connection
ftp_close($conn_id);  
        
echo '<br><br><a href="newsaddpageform.php">Back to Add News</a>';

?>