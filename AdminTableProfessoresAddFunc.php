<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $IdUser = mysqli_real_escape_string($db, $_POST['IdUser']);
        $Nome = mysqli_real_escape_string($db, $_POST['Nome']);

        $sql = "INSERT INTO professores (IdUser,Nome) VALUES ('$IdUser','$Nome')";

        if (mysqli_query($db, $sql)) {
            echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: AdminTableProfessores.php");
        } else {
            echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            //header("location: AdminTableProfessores.php");
        }
}