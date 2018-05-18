<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $designacao = mysqli_real_escape_string($db, $_POST['designacao']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $localidade = mysqli_real_escape_string($db, $_POST['localidade']);
        $contacto = mysqli_real_escape_string($db, $_POST['contacto']);

        $sql = "INSERT INTO escolas (Designacao,Localidade,Contacto,Email) VALUES ('$designacao','$localidade','$contacto','$email')";

        if (mysqli_query($db, $sql)) {
            //echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: AdminTableEscolas.php");
        } else {
            //echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            header("location: AdminTableEscolas.php");
        }
}