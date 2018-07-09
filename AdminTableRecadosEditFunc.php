<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $IdProfessor = mysqli_real_escape_string($db, $_POST['IdProfessor']);
    $IdEscola = mysqli_real_escape_string($db, $_POST['IdEscola']);
    $IdEncarregado = mysqli_real_escape_string($db, $_POST['IdEncarregado']);
    $IdAluno = mysqli_real_escape_string($db, $_POST['IdAluno']);
    $Mensagem = mysqli_real_escape_string($db, $_POST['Mensagem']);
    $DataEnvio = mysqli_real_escape_string($db, $_POST['DataEnvio']);
    $DataConfirmacao = mysqli_real_escape_string($db, $_POST['DataConfirmacao']);
    $Lido = mysqli_real_escape_string($db, $_POST['Lido']);
    $Comparece = mysqli_real_escape_string($db, $_POST['Comparece']);


    //echo $Mensagem . '<br><br>';

    $sql = "UPDATE recados SET IdProfessor ='$IdProfessor', IdEscola='$IdEscola', IdEncarregado='$IdEncarregado',IdAluno='$IdAluno' ,
Mensagem='$Mensagem', DataEnvio='$DataEnvio', DataConfirmacao='$DataConfirmacao', Lido='$Lido', Comparece ='$Comparece'
            WHERE IdRecado ='$id'";

    if (mysqli_query($db, $sql)) {
        echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableRecados.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableRecados.php");
    }

}