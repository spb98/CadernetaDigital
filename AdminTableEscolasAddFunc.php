<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $designacao = mysqli_real_escape_string($db, $_POST['Designacao']);
    $localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $contacto = mysqli_real_escape_string($db, $_POST['Contacto']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);

    $sql = "INSERT INTO escolas (Designacao,Localidade,Contacto,Email) VALUES ('$designacao','$localidade','$contacto','$email')";

    if (mysqli_query($db, $sql)) {
        echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimAdicionar';
        header("location: AdminTableEscolas.php");
    } else {
        echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableEscolas.php");
    }
}