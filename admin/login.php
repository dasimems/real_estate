<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/styles/login.css">
        <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="body-content">

            <div class="login-container">

                <h1 class="login-header">Admin Login</h1>

                <form action="" class="form-container">

                    <div class="form-content">
                        <input type="email" name="email" id="email">
                        <label for="email">Login Email</label>
                    </div>

                    <div class="form-content">
                        <input type="password" name="password" id="password">
                        <label for="password">Login Password</label>
                    </div>

                    <div class="form-content">

                        <button type="submit"><span class="text">Login</span> <span class="icon"><i class="fa-solid fa-sign-in-alt"></i></span></button>

                    </div>

                </form>

            </div>

        </div>
        
        <script src="../assets/scripts/functions.js" async></script>
        <script src="./assets/scripts/login.js" defer></script>
    </body>
</html>