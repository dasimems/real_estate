<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit Pages | Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/styles/common.css">
    <link rel="stylesheet" href="../assets/styles/page.css">
    <script src="../../assets/plugins/lottie_player/lottie-player.js"></script>
</head>

<body class="flex-content align-center justify-center">
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="main-body flex-content align-center space-between">

        <div class="nav-content flex-content align-center justify-center">

            <?php require_once("../includes/nav.php") ?>

        </div>

        <div class="main-content flex-content column align-center justify-start">

            <div class="header-content">

                <?php require_once("../includes/header.php") ?>

            </div>

            <div class="main-body-content">

                <?php

                if (isset($_GET["page"]) && !empty($_GET["page"]) && file_exists("./" . $_GET["page"] . ".php")) {

                    $header_title = "Edit " . ucwords($_GET["page"]) . " page content";


                ?>

                    <div class="page-contents">

                        <h2 class="content-header"><?php echo $header_title; ?></h2>


                        <?php require_once("./" . $_GET["page"] . ".php"); ?>

                    </div>


                <?php

                } else {



                ?>

                    <div class="empty-content empty-page flex-content justify-center align-center column">

                        <lottie-player class="empty-animation" src="../../assets/images/93120-erorr-404.json" background="transparent" speed="1" loop autoplay></lottie-player>


                    </div>

                <?php

                }


                ?>

            </div>

            <div class="notification-container">

                <?php require_once("../includes/notification.php") ?>

            </div>

        </div>

    </div>

    <script src="../../assets/scripts/functions.js" async></script>
    <script src="../assets/scripts/general.js" defer></script>
</body>

</html>