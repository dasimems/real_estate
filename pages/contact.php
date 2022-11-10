 <?php  require_once "../functions/customer/contact.php" ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Real Estate</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="../assets/styles/general.css">
        <link rel="stylesheet" href="../assets/styles/contact.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

       <main>

            <div class="header-content">

                <?php require_once("../includes/header.php"); ?>

            </div>


            <div class="body-contents">


                <div class="body">

                    <div class="banner">

                        <div class="banner-content flex-content align-center justify-center column">

                            <h1 class="banner-header">Reach out to us at any convenient time </h1>

                            <div class="banner-action flex-content justify-center">
                                
                                <a href="http://facebook.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-square"></i></a>

                                <a href="http://instagram.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram-square"></i></a>

                                <a href="http://linkedin.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a>

                                <a href="http://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-twitter-square"></i></a>

                            </div>

                        </div>
                        
                    </div>

                    <div class="contact">

                        <div class="contact-content flex-content wrap space-between">

                            <div class="contact-details">

                                <h2 class="contact-details-header">Get a quote</h2>

                                <p class="contact-details-subtitle">Fill up the form and our team will get back to you within 24 hours</p>

                                <div class="contact-details-links">

                                    <ul>

                                        <li><a href="http://map.google.com" target="_blank" rel="noopener noreferrer"><span class="icon"><i class="fa-solid fa-location-dot"></i></span><span class="text">Lagos, Lagos Nigeria</span></a></li>
                                        <li><a href="tel:+2349036634645"  target="_blank" rel="noopener noreferrer"><span class="icon"><i class="fa-solid fa-phone"></i></span><span class="text">+(234) 903-663-4645</span></a></li>
                                        <li><a href="mailto:isaacseun63@gmail.com"  target="_blank" rel="noopener noreferrer"><span class="icon"><i class="fa-solid fa-envelope"></i></span><span class="text">isaacseun63@gmail.com</span></a></li>

                                    </ul>

                                </div>

                            </div>

                            <div class="contact-form">

                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">

                                    <div class="form-content flex-content column">

                                        <label for="name">Full Name</label>

                                        <div class="form-box">

                                            <input type="text" name="name" id="name" placeholder="Your full name">

                                        </div>
                                        <?php echo $nameErr?>

                                    </div>

                                    <div class="form-content flex-content column">

                                        <label for="email">Email</label>
    
                                        <div class="form-box">

                                            <input type="email" name="email" class="error" id="email" placeholder="Your email address">

                                        </div>
                                        <?php echo $emailErr; ?>


                                    </div>

                                    <div class="form-content flex-content column">

                                        <label for="message">Message</label>

                                        <textarea name="message" id="message" placeholder="Message here..."></textarea>
                                        <?php echo $msgErr; ?>

                                    </div>

                                    <div class="form-content flex-content column">

                                        <button type="submit" name="submit">Submit</button>

                                    </div>


                                </form>

                            </div>

                        </div>


                    </div>


                    <div class="extra-content">

                        <div class="content-image">

                            <img src="../assets/images/banner_image.png" alt="A tall building">

                        </div>
                        <div class="content-details">

                            <p class="subtitle">Find home with us</p>
                            <h2 class="header">Find the right house over</h2>
                            <h2 class="header"> 400, 000 property options</h2>

                            <div class="cta">
                                <a href="./properties.php">Find Now</a>
                            </div>

                        </div>

                        

                    </div>

                </div>
                

                <?php require_once("../includes/footer.php"); ?>

            </div>

       </main>
        
        <script src="../assets/scripts/functions.js" async defer></script>
        <script src="../assets/scripts/general.js" async defer></script>
    </body>
</html>