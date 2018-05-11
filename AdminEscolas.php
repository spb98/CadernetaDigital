<!DOCTYPE html>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '0') {
    //echo 'Erro de credenciais.';
    header("location: index.php");

}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração</title>
    <?php include("ConfigsAssets.php") ?>
</head>

<body
    <?php if (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'SimApagar') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="deleteMessage();"';
    } elseif (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'SimEditar') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="updateMessage();"';
    } elseif (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'SimAdicionar') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="addMessage();"';
    } elseif (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'ERRO') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="errorMessage();"';
    }
    ?>
>

<?php

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];

    $sql = "DELETE FROM escolas WHERE IdEscolas = $delete_id";

    if (mysqli_query($db, $sql)) {
        //echo "Record deleted successfully";
        $_SESSION['ActionTaken'] = 'SimApagar';
    } else {
        //echo "Error deleting record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
    }
    header("location: AdminEscolas.php");
}

$_SESSION['AdminCurrentTable'] = 'escolas';

include("Admin_Sidebar.php");

?>

<div class="row">
    <div class="col-md-12">
        <div class="">
            <h1>Escolas</h1>
            <div id="tableLinda">
                <div class="form-group pull-right">
                    <input type="text" class="search form-control" placeholder="O que deseja procurar?">
                </div>
                <span class="counter pull-right"></span>
                <form method="post" action="AdminEscolasEdit.php">
                    <table class="table table-hover table-bordered results">
                        <thead>
                        <tr>
                            <th class="col-md-3 col-xs-3">Designação</th>
                            <th class="col-md-3 col-xs-3">Localidade</th>
                            <th class="col-md-1 col-xs-1">Contacto</th>
                            <th class="col-md-3 col-xs-3">Email</th>
                            <th class="col-md-1 col-xs-1">Ação</th>
                        </tr>
                        <tr class="warning no-result">
                            <td colspan="5"><i class="fa fa-warning"></i> Sem resultados</td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM escolas";
                        $results1 = mysqli_query($db, $sql);
                        $results2 = mysqli_query($db, $sql);

                        $datarow = "";
                        while ($row2 = mysqli_fetch_array($results2)) {
                            $datarow = $datarow . "<tr>
                                                        <td>$row2[1]</td>
                                                        <td>$row2[2]</td>
                                                        <td>$row2[3]</td>
                                                        <td>$row2[4]</td>
                                                        <td><button value='$row2[0]' type='submit' name='edit' class=\"btn btn-default\"><em class=\"fa fa-pencil\"></em>
                                                            <button id='delete$row2[0]' onclick='check(this);' value='$row2[0]' type='button' name='delete' class=\"btn btn-danger\"><em class=\"fa fa-trash\"></em></button></td>
                                                        </tr>";
                        }
                        echo $datarow;
                        ?>
                        </tbody>
                    </table>
                </form>
                <button type="button" onclick="location.href = 'AdminEscolasAdd.php';"
                        class="btn btn-success"><em class="fa fa-plus"></em></button>
            </div>
        </div>
    </div>
</div>
<?php
include "ConfigsAssets.php";
?>
</body>

</html>