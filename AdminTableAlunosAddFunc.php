<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idencarregados = mysqli_real_escape_string($db, $_POST['IdEncarregados']);
    $nome = mysqli_real_escape_string($db, $_POST['Nome']);
    $morada = mysqli_real_escape_string($db, $_POST['Morada']);
    $localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $cc = mysqli_real_escape_string($db, $_POST['CC']);
    $sexo = mysqli_real_escape_string($db, $_POST['Sexo']);
    $datanascimento = mysqli_real_escape_string($db, $_POST['DataNascimento']);
    //$foto = mysqli_real_escape_string($db, $_POST['foto']);


    //verificar as propriedades da imagem
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['foto']['tmp_name'];
        $foto2 = addslashes(file_get_contents($image));
    }
    //imagem vai ser armazenada

    $sql = "INSERT INTO alunos (IdEncarregados,Nome,Morada,Localidade,CC,Sexo,DataNascimento,foto) VALUES ('$idencarregados','$nome','$morada','$localidade','$cc','$sexo','$datanascimento','$foto2')";

    if (mysqli_query($db, $sql)) {
        //echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimAdicionar';
        header("location: AdminTableAlunos.php");
    } else {
        //echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        header("location: AdminTableAlunos.php");
    }
}