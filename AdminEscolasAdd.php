<?php include("ConfigsDB.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <?php include("ConfigsAssets.php")?>
</head>

<body>
<?php
$_SESSION['AdminCurrentTable'] = 'escolas';


include("Admin_Sidebar.php") ?>


            <div class="row">
                <div class="col-md-12">
                    <h1> Adicionar a informação da escola:</h1>
                    <hr></hr>
                    <form method="post" action="AdminEscolasAddFunc.php">
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Designação:</label><input class="form-control"
                                                                                     type="text"
                                                                                     name="designacao"></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Email:</label><input class="form-control"
                                                                                type="email" autocomplete="off"
                                                                                required="" name="email"></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Localidade:</label><input class="form-control"
                                                                                     type="text"
                                                                                     name="localidade"
                                                                                     autocomplete="off"
                                                                                     required=""></div>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group"><label>Contacto:</label><input class="form-control"
                                                                                   type="number"
                                                                                   name="contacto"
                                                                                   required="">
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


