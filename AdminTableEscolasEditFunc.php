<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }
        $designacao = mysqli_real_escape_string($db, $_POST['designacao']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $localidade = mysqli_real_escape_string($db, $_POST['localidade']);
        $contacto = mysqli_real_escape_string($db, $_POST['contacto']);

        $sql = "UPDATE escolas SET Designacao ='$designacao', Localidade='$localidade', Contacto='$contacto', Email='$email'
            WHERE IdEscolas ='$id'";

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