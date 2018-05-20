<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $Designacao = mysqli_real_escape_string($db, $_POST['Designacao']);
    $Localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $Contacto = mysqli_real_escape_string($db, $_POST['Contacto']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Website = mysqli_real_escape_string($db, $_POST['Website']);

    $sql = "UPDATE estabelecimento SET Designacao ='$Designacao', Localidade='$Localidade', Contacto='$Contacto', Email='$Email',Website='$Website'
            WHERE IdEstablecimento ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableEstabelecimento.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableEstabelecimento.php");
    }

}