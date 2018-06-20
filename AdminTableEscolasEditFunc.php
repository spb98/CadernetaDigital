<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $designacao = mysqli_real_escape_string($db, $_POST['Designacao']);
    $localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $contacto = mysqli_real_escape_string($db, $_POST['Contacto']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);

    $sql = "UPDATE escolas SET Designacao ='$designacao', Localidade='$localidade', Contacto='$contacto', Email='$email'
            WHERE IdEscola ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableEscolas.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminEscolas.php");
    }

}