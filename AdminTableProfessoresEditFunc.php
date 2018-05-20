<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $IdUsers = mysqli_real_escape_string($db, $_POST['IdUsers']);
    $Nome = mysqli_real_escape_string($db, $_POST['Nome']);

    $sql = "UPDATE professores SET IdUsers ='$IdUsers', Nome='$Nome'
            WHERE IdProfessor ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableProfessores.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableProfessores.php");
    }

}