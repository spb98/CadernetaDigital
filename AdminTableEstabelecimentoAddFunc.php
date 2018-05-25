<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {



        $Designacao = mysqli_real_escape_string($db, $_POST['Designacao']);
        $Localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
        $Contacto = mysqli_real_escape_string($db, $_POST['Contacto']);
        $Email = mysqli_real_escape_string($db, $_POST['Email']);
        $Website = mysqli_real_escape_string($db, $_POST['Website']);

        $sql = "INSERT INTO estabelecimento (Designacao,Localidade,Contacto,Email,Website)
 VALUES ('$Designacao','$Localidade','$Contacto','$Email','$Website')";

        if (mysqli_query($db, $sql)) {
            //echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: AdminTableEstabelecimento.php");
        } else {
            //echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            header("location: AdminTableEstabelecimento.php");
        }
}