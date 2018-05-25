<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $IdProfessores = mysqli_real_escape_string($db, $_POST['IdProfessores']);
    $IdEscolas = mysqli_real_escape_string($db, $_POST['IdEscolas']);
    $IdEncarregados = mysqli_real_escape_string($db, $_POST['IdEncarregados']);
    $Mensagem = mysqli_real_escape_string($db, $_POST['Mensagem']);
    $DataEnvio = mysqli_real_escape_string($db, $_POST['DataEnvio']);
    $DataConfirmacao = mysqli_real_escape_string($db, $_POST['DataConfirmacao']);
    $Lido = mysqli_real_escape_string($db, $_POST['Lido']);

    $sql = "INSERT INTO recados (IdProfessores,IdEscolas,IdEncarregados,Mensagem,DataEnvio,DataConfirmacao,Lido) VALUES ('$IdProfessores','$IdEscolas','$IdEncarregados','$Mensagem','$DataEnvio','$DataConfirmacao','$Lido')";

    if (mysqli_query($db, $sql)) {
        //echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimAdicionar';
        header("location: AdminTableRecados.php");
    } else {
        //echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        header("location: AdminTableRecados.php");
    }
}