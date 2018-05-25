<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $IdEscolas = mysqli_real_escape_string($db, $_POST['IdEscolas']);
        $IdProfessor = mysqli_real_escape_string($db, $_POST['IdProfessor']);
        $Ano = mysqli_real_escape_string($db, $_POST['Ano']);
        $Turma = mysqli_real_escape_string($db, $_POST['Turma']);

        $sql = "INSERT INTO turmas (IdEscolas,IdProfessor,Ano,Turma) VALUES ('$IdEscolas','$IdProfessor','$Ano','$Turma')";

        if (mysqli_query($db, $sql)) {
            //echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: AdminTableTurmas.php");
        } else {
            //echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            header("location: AdminTableTurmas.php");
        }
}