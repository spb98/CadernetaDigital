<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //se for clickado em algum botão edit
    if (isset($_POST['edit'])) {
        $idnumber = mysqli_real_escape_string($db, $_POST['edit']);
    } else {
        header("location: AdminEscolas.php");
    }

    //Arranja tudo da tabela escola
    $sql = "SELECT * FROM escolas WHERE IdEscolas = '$idnumber'";
    $results = mysqli_query($db, $sql);

    $row2 = mysqli_fetch_array($results);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V1.3</title>
    <?php include("ConfigsAssets.php")?>
</head>

<body>
<div id="wrapper" style="background-color:#ffffff;">
    <div id="sidebar-wrapper" style="background-color:#000000;margin-top:-20px;">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#">[<?php
                    echo $_SESSION["LoggedUsername"];
                    ?>] </a></li>
            <li><a href="AdminEscolas.php">Escolas </a></li>
            <li><a href="#">Recados </a></li>
            <li><a href="LogoutFunc.php">Logout </a></li>
        </ul>
    </div>
    <div class="page-content-wrapper" style="background-color:#ffffff;">
        <div class="container-fluid" style="background-color:#ffffff;"><a class="btn btn-link" role="button"
                                                                          href="#menu-toggle" id="menu-toggle"><i
                        class="fa fa-bars"></i></a>
            <div class="row">
                <div class="col-md-12">
                    <h1> Editar a informação da escola:</h1>
                    <hr></hr>
                    <form method="post" action="AdminEscolasEditFunc.php?edit=<?php echo $row2[0]; ?>">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>ID:</label><input disabled
                                                                             value="<?php echo $row2[0]; ?>"
                                                                             class="form-control" type="text"
                                                                             name="id"></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Designação:</label><input value="<?php echo $row2[1]; ?>"
                                                                                     class="form-control"
                                                                                     type="text"
                                                                                     name="designacao"></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Email:</label><input value="<?php echo $row2[4]; ?>"
                                                                                class="form-control"
                                                                                type="email" autocomplete="off"
                                                                                required="" name="email"></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Localidade:</label><input value="<?php echo $row2[2]; ?>"
                                                                                     class="form-control"
                                                                                     type="text"
                                                                                     name="localidade"
                                                                                     autocomplete="off"
                                                                                     required=""></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Contacto:</label><input value="<?php echo $row2[3]; ?>"
                                                                                   class="form-control"
                                                                                   type="text" name="contacto"
                                                                                   autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" type="submit">Fazer Alterações</button>
                    </form>
                    <a href="AdminEscolas.php">
                        <button class="btn btn-danger form-btn" type="button">Cancelar</button>
                    </a>
                    <?php include("ConfigsAssets.php")?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>


