<?php
    session_start();
    echo "<a href='logout.php'>Logout</a><br>";
    if(isset($_SESSION['testuser'])){
        echo $_SESSION['testuser'];
    } 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Add News Form</title>
    </head>
    <body>
        <h1> Add News </h1>

        <form action="uploadnews.php" method="post" enctype="multipart/form-data">
            Upload photo: <br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            Title:<br>
            <input type="text" name="Title" placeholder="Title"><br>
            Content:<br>
            <textarea style="height:300px;width:500px;" name="message" placeholder="Messages..."></textarea><br>
            <input type="submit" value="Add News" name="submit">
        </form>

        <p>Add News</p>

    </body>
</html>