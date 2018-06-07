<?php include("ConfigsDoctype.php"); ?>
<?php include("ConfigsDB.php"); ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Caderneta Digital</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form method="post" action="LoginFunc.php">
                        <div class="form-group">
                            <label>Username / Email address</label>
                            <input name="username" type="text" class="form-control" placeholder="Username / Email address">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input  name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                        <?php
                        //Se fizer erro no login
                        if (isset($_SESSION["loginError"]) && $_SESSION["loginError"] === 'sim') {
                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                                            Password ou username errados!
                                        </div>";
                            session_destroy();
                        }
                        ?>
                        <br>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Login</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
