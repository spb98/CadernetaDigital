<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $IdUsers = mysqli_real_escape_string($db, $_POST['IdUsers']);
        $Nome = mysqli_real_escape_string($db, $_POST['Nome']);

        $sql = "INSERT INTO professores (IdUsers,Nome) VALUES ('$IdUsers','$Nome')";

        if (mysqli_query($db, $sql)) {
            //echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: AdminTableProfessores.php");
        } else {
            //echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            header("location: AdminTableProfessores.php");
        }
}