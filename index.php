<!DOCTYPE html>
<?php include("ConfigsDB.php"); ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caderneta Digital</title>
    <?php include("ConfigsAssets.php") ?>
</head>

<body style="background-image:url(&quot;assets/img/Background.jpg&quot;);">
<form method="post" action="LoginFunc.php" id="form"
      style="font-family:Quicksand, sans-serif;background-color:rgba(44,40,52,0.73);width:320px;padding:40px;">
    <h1 id="head" style="color:rgb(193,166,83);">Caderneta Escolar</h1>
    <div><img class="img-rounded img-responsive" src="assets/img/logo.png" data-aos="zoom-in" id="image"
              style="width:auto;height:auto;"></div>
    <div class="form-group"><input required name="username" class="form-control" type="text" autofocus="" id="formum"
                                   placeholder="Username / Email"></div>
    <div class="form-group"><input required name="password" class="form-control" type="password" id="formum2"
                                   placeholder="Password"></div>
    <?php
    //Se fizer erro no login
    if (isset($_SESSION["loginError"]) && $_SESSION["loginError"] === 'sim') {
        echo "<p class='errortext'>Username / Email ou password errado!</p>";
        session_destroy();
    }
    ?>
    <button class="btn btn-default btn-lg" type="submit" id="butonas"
            style="width:100%;height:100%;margin-bottom:10px;background-color:rgb(184,144,76);color:rgb(255,255,255);">
        Login
    </button>

</form>

<?php include("ConfigsAssets.php") ?>
</body>

</html>