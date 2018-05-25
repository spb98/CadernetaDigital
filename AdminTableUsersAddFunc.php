<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $Username = mysqli_real_escape_string($db, $_POST['Username']);
        $Password = mysqli_real_escape_string($db, $_POST['Password']);
        $Email = mysqli_real_escape_string($db, $_POST['Email']);
        $Nivel = mysqli_real_escape_string($db, $_POST['Nivel']);

        $sql = "INSERT INTO users (Username,Password,Email,Nivel) VALUES ('$Username','$Password','$Email','$Nivel')";

        if (mysqli_query($db, $sql)) {
            //echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: AdminTableUsers.php");
        } else {
            //echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            header("location: AdminTableUsers.php");
        }
}