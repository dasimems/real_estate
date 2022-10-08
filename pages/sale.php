<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sell Property</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="../assets/styles/general.css">
        <link rel="stylesheet" href="../assets/styles/sale.css">
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

                    <div class="banner flex-content space-between align-center">

                        <div class="banner-content">

                            <h1 class="banner-header">Let's help you get</h1>
                            <h1 class="banner-header">profitable amount for your property</h1>

                            <p class="subtitle">Please fill out the form below to proceed in selling your property</p>

                        </div>

                        <div class="banner-image">
                            <!-- <img src="../assets/images/sale_banner.png" alt="A slant building"> -->
                        </div>
                        
                    </div>

                    <form action="" method="post" class="property-sale-form">

                        <div class="form-header">Personal Information</div>

                        <p class="subtitle">All form input with <span>*</span> is required</p>

                        <div class="form-container flex-content wrap space-between">

                            <div class="form-content flex-content column">
                                <label for="name"><span class="text">Full Name</span><span class="required">*</span></label>
                                <input type="text" class="name" id="name" name="name" placeholder="Your full name">
                            </div>

                            <div class="form-content flex-content column">
                                <label for="email"><span class="text">Email address</span><span class="required">*</span></label>
                                <input type="email" class="email" id="email" name="email" placeholder="Your email address">
                            </div>

                            <div class="form-content flex-content column">
                                <label for="tel"><span class="text">Mobile number</span><span class="required">*</span></label>
                                <input type="tel" class="tel" id="tel" name="tel" placeholder="Your mobile number">
                            </div>

                            <div class="form-content flex-content column full-width">
                                <label for="address"><span class="text">Home Address</span><span class="required">*</span></label>
                                <input type="text" class="address" id="address" name="address" placeholder="Your home address">
                            </div>

                        </div>

                        <div class="form-header">Property Information</div>

                        <div class="form-container flex-content wrap space-between">

                            <div class="form-content flex-content column">
                                <label for="property-type"><span class="text">Type</span><span class="required">*</span></label>
                                <select class="property-type" id="property-type" name="property-type">

                                    <option value="">Please Choose an option</option>

                                </select>
                            </div>

                            <div class="form-content flex-content column">
                                <label for="bought-price"><span class="text">Bought Price</span><span class="required">*</span></label>
                                <input type="text" class="bought-price" id="bought-price" name="bought-price" placeholder="Amount you bought it">
                            </div>

                            <div class="form-content flex-content column">
                                <label for="sale-price"><span class="text">Possible sale Price</span><span class="required">*</span></label>
                                <input type="text" class="sale-price" id="sale-price" name="sale-price" placeholder="Your expected price to sell">
                            </div>

                            <div class="form-content flex-content column full-width">
                                <label for="property-address"><span class="text">Property Address</span><span class="required">*</span></label>
                                <input type="text" class="property-address" id="property-address" name="property-address" placeholder="Your home address">
                            </div>


                            <div class="form-content flex-content column full-width">
                                <label for="reason"><span class="text">Why do you intend to sell it?</span><span class="required">*</span></label>
                                <textarea class="reason" id="reason" name="reason" placeholder="Reason for selling the property"></textarea>
                            </div>

                            <div class="form-content flex-content column full-width">
                                <label for="condition"><span class="text">Present Condition</span><span class="required">*</span></label>
                                <textarea class="condition" id="condition" name="condition" placeholder="Please state the present condition of the house"></textarea>
                            </div>

                            <div class="form-content">

                                <button class="submit-button" type="submit">Submit</button>

                            </div>

                        </div>

                    </form>

                </div>
                

                <?php require_once("../includes/footer.php"); ?>

            </div>

       </main>
        
        <script src="../assets/scripts/functions.js" async defer></script>
        <script src="../assets/scripts/general.js" async defer></script>
    </body>
</html>