<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $IdProfessores = mysqli_real_escape_string($db, $_POST['IdProfessores']);
    $IdEscolas = mysqli_real_escape_string($db, $_POST['IdEscolas']);
    $IdEncarregados = mysqli_real_escape_string($db, $_POST['IdEncarregados']);
    $Mensagem = mysqli_real_escape_string($db, $_POST['Mensagem']);
    $DataEnvio = mysqli_real_escape_string($db, $_POST['DataEnvio']);
    $DataConfirmacao = mysqli_real_escape_string($db, $_POST['DataConfirmacao']);
    $Lido = mysqli_real_escape_string($db, $_POST['Lido']);

    $sql = "UPDATE recados SET IdProfessores ='$IdProfessores', IdEscolas='$IdEscolas', IdEncarregados='$IdEncarregados', Mensagem='$Mensagem', DataEnvio='$DataEnvio', DataConfirmacao='$DataConfirmacao', Lido='$Lido'
            WHERE IdRecados ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableRecados.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableRecados.php");
    }

}