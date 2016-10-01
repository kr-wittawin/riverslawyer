<!--

PHP script for email
-->
<!DOCTYPE html>
    <head>
        <!-- bootstrap.min -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.css">
    </head>
    <body>
         <!-- Auto services -->
        <div class="container">
            <div class="row">
                <div class="sec-title text-center">
                    <div class="hidden-xs col-md-3 col-sm-3"></div>
                    <?php
                    $to = "khunworld@hotmail.com";
                    $subject = $_REQUEST['subject'];
                    $email = $_REQUEST['email'];
                    $name = $_REQUEST['name'];

                    $message = "From: $name \r\n";
                    $message .= "Reply to: $email \r\n";
                    $message .= "Topic: $subject \r\n ";
                    $message .= "=================== \r\n\r\n\r\n ";
                    $message .= $_REQUEST['message'];

                    

                    $sent = mail($to,$subject,$message);
                    if($sent) {
                        print ('<div class="col-md-6 col-sm-6 col-xs-12 text-center" style="margin-top:100px;">
                        <h2>Your mail was sent</h2> <br>
                        <div class="service-item">
                            <i class="fa fa-envelope-o fa-5x"></i> <br><br>
                            <p>Rivers Lawyers will reply promptly within one business days.</p> 
                            <a class="btn btn-success btn-large" href="index.html"> Home</a>
                        </div>
                    </div>');
                    } else {
                        print ('<div class="col-md-6 col-sm-6 col-xs-12 text-center" style="margin-top:100px;">
                        <h2>Error</h2><br>
                        <div class="service-item">
                            <i class="fa fa-ban fa-5x"></i> <br><br>
                            <p>An error has occured. Please try again later.</p><br>
                            <a class="btn btn-danger btn-large" href="index.html"> Home</a>
                        </div>
                    </div>');
                    }
                    ?>
                    <div class="hidden-xs col-md-3 col-sm-3"></div>
            </div>
        </div>
    </body>
</html>