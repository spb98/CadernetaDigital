<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $IdProfessor = mysqli_real_escape_string($db, $_POST['IdProfessor']);
    $IdEscola = mysqli_real_escape_string($db, $_POST['IdEscola']);
    $IdEncarregado = mysqli_real_escape_string($db, $_POST['IdEncarregado']);
    $IdAluno = mysqli_real_escape_string($db, $_POST['IdAluno']);
    $Mensagem = mysqli_real_escape_string($db, $_POST['Mensagem']);
    $DataEnvio = mysqli_real_escape_string($db, $_POST['DataEnvio']);
    $DataConfirmacao = mysqli_real_escape_string($db, $_POST['DataConfirmacao']);
    $Lido = mysqli_real_escape_string($db, $_POST['Lido']);
    $Comparece = mysqli_real_escape_string($db, $_POST['Comparece']);

    $sql = "INSERT INTO recados (IdProfessor,IdEscola,IdEncarregado,IdAluno,Mensagem,DataEnvio,DataConfirmacao,Lido,Comparece) VALUES ('$IdProfessor','$IdEscola','$IdEncarregado','$IdAluno','$Mensagem','$DataEnvio','$DataConfirmacao','$Lido','$Comparece')";

    if (mysqli_query($db, $sql)) {
        echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimAdicionar';
        header("location: AdminTableRecados.php");
    } else {
        echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableRecados.php");
    }
}