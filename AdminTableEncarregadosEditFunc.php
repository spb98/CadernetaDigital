<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $IdUser = mysqli_real_escape_string($db, $_POST['IdUser']);
    $Localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $Morada = mysqli_real_escape_string($db, $_POST['Morada']);
    $Sexo = mysqli_real_escape_string($db, $_POST['Sexo']);
    $Nome = mysqli_real_escape_string($db, $_POST['Nome']);

    $sql = "UPDATE encarregados SET IdUser='$IdUser', Localidade='$Localidade', Morada='$Morada', Sexo='$Sexo', Nome='$Nome'
            WHERE IdEncarregado ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableEncarregados.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableEncarregados.php");
    }

}