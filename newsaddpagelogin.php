<?php
session_start();
$_SESSION['testuser'] = 'onlyworld';
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
        <title>News Manage Login Page</title>
    </head>
    <body>
        <h1> Login to Add News </h1>

        <form action="newsaddpageform.php">
            First name:<br>
            <input type="text" name="firstname" placeholder="username"><br>
            Last name:<br>
            <input type="text" name="lastname" placeholder="password"><br><br>
            <input type="submit" value="Submit">
        </form>

        <p>Login Button to add News.</p>

        <?php

            $db = mysqli_connect('localhost','root','','test');
            $sql = "SELECT * FROM test_table";
            if($result = mysqli_query($db,$sql)){
                if($result->num_rows) {
                    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

                    foreach($rows as $row) {
                        echo '/..........', $row['user'], ' ', $row['color'],  '<br>';
                    }
                }
            }

        ?>

    </body>
</html>