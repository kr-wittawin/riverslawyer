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
            Upload photo: {.jpg, .jpeg, .png, .gif} <br>
            <input type="file" name="newsImage" id="newsImage" multiple accept='image/*'><br><br>
            Upload content: {.txt} <br>
            <input type="file" name="newsContent" id="newsContent" accept="text/plain"><br><br>
            <b>***Note</b><br>
            Content format below must be followed. First line contains only the title, then comes the content.<br>
            <img src="img/content_ex.png" alt="Content file format" /><br><br>
            <input type="submit" value="Add News" name="submit">
        </form> 
    </body>
</html>