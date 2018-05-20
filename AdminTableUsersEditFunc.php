<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

    $Username = mysqli_real_escape_string($db, $_POST['Username']);
    $Password = mysqli_real_escape_string($db, $_POST['Password']);
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
    $Nivel = mysqli_real_escape_string($db, $_POST['Nivel']);

    $sql = "UPDATE users SET Username ='$Username', Password='$Password', Email='$Email', Nivel='$Nivel'
            WHERE IdUser ='$id'";

    if (mysqli_query($db, $sql)) {
        //echo "Record updated successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableUsers.php");
    } else {
        echo "Error updating record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminUsers.php");
    }

}