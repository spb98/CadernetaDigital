<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $IdEscolas = mysqli_real_escape_string($db, $_POST['IdEscolas']);
    $IdProfessor = mysqli_real_escape_string($db, $_POST['IdProfessor']);
    $Ano = mysqli_real_escape_string($db, $_POST['Ano']);
    $Turma = mysqli_real_escape_string($db, $_POST['Turma']);

    $sql = "UPDATE turmas SET IdEscolas ='$IdEscolas', IdProfessor='$IdProfessor', Ano='$Ano', Turma='$Turma'
            WHERE IdTurma ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableTurmas.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTurmas.php");
    }

}