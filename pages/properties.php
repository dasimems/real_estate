<?php  require_once "../functions/customer/properties_page.php" ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo isset($_GET['type']) && !empty($_GET['type']) && ( $_GET['type'] === "buy" ||  $_GET['type'] === "rent") ? ucwords($_GET['type'])." ". "Properties" : "Properties"; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.css">
        <link rel="stylesheet" href="../assets/styles/general.css">
        <link rel="stylesheet" href="../assets/styles/general.css">
        <link rel="stylesheet" href="../assets/styles/properties.css">

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

                    <div class="banner-header flex-content space-between align-center wrap">

                        <h1>Discover a place you will love to live</h1>

                        <div class="banner-header-content">

                            <p class="subtitle">Beautiful homes, Incredible locations and pricing that makes sense</p>

                            <form action="" class="flex-content wrap" method="get">

                                <select name="type" id="type">
                                    <option value="">Choose property type</option>
                                    <option value="rent">Rent</option>
                                    <option value="buy">Buy</option>
                                </select>

                                <input type="text" name="city" id="city" placeholder="Enter city name">

                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>

                            </form>

                        </div>

                    </div>

                    <div class="banner">

                        <img src="../assets/images/property_banner_edited.jpg" alt="A building">
                        
                    </div>



                    <div class="properties">

                        <div class="properties-header flex-content space-between ">

                            <h2>Available Properties</h2>

                        </div>

                        <div class="properties-container flex-content wrap">
                        <?php echo $page_data ?>
                        </div>

                        <div class="properties-pagination">
                       <?php echo $nav ?>
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