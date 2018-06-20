<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $IdUser = mysqli_real_escape_string($db, $_POST['IdUser']);
    $Localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $Morada = mysqli_real_escape_string($db, $_POST['Morada']);
    $Sexo = mysqli_real_escape_string($db, $_POST['Sexo']);
    $Nome = mysqli_real_escape_string($db, $_POST['Nome']);

    $sql = "INSERT INTO encarregados (IdUser,Localidade,Morada,Sexo,Nome) VALUES ('$IdUser','$Localidade','$Morada','$Sexo','$Nome')";

    if (mysqli_query($db, $sql)) {
        echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimAdicionar';
        header("location: AdminTableEncarregados.php");
    } else {
        echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableEncarregados.php");
    }
}