<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $idencarregados = mysqli_real_escape_string($db, $_POST['IdEncarregados']);
    $nome = mysqli_real_escape_string($db, $_POST['Nome']);
    $morada = mysqli_real_escape_string($db, $_POST['Morada']);
    $localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $cc = mysqli_real_escape_string($db, $_POST['CC']);
    $sexo = mysqli_real_escape_string($db, $_POST['Sexo']);
    $datanascimento = mysqli_real_escape_string($db, $_POST['DataNascimento']);

    $sql = "UPDATE alunos SET IdEncarregados ='$idencarregados', Nome='$nome', Morada='$morada', Localidade='$localidade', CC='$cc', Sexo='$sexo', DataNascimento='$datanascimento'
            WHERE IdAlunos ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableAlunos.php");
    } else {
        //echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        header("location: AdminAlunos.php");
    }

}