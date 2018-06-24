<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idencarregado = mysqli_real_escape_string($db, $_POST['IdEncarregado']);
    $idturma = mysqli_real_escape_string($db, $_POST['IdTurma']);
    $nome = mysqli_real_escape_string($db, $_POST['Nome']);
    $morada = mysqli_real_escape_string($db, $_POST['Morada']);
    $localidade = mysqli_real_escape_string($db, $_POST['Localidade']);
    $cc = mysqli_real_escape_string($db, $_POST['CC']);
    $sexo = mysqli_real_escape_string($db, $_POST['Sexo']);
    $datanascimento = mysqli_real_escape_string($db, $_POST['DataNascimento']);

    //verificar as propriedades da imagem

    $check = getimagesize($_FILES["Foto"]["tmp_name"]);
    if (filesize ($_FILES["Foto"]["tmp_name"]) > 150000 ){
        echo "File muito grande....<br><br>";
        //$_SESSION['ActionTaken'] = 'FILE';
        header("location: AdminTableAlunos.php");
    } elseif ($check !== false) {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        $image = $_FILES['Foto']['tmp_name'];
        $foto = addslashes(file_get_contents($image));
    }

    //imagem vai ser armazenada

    $sql = "INSERT INTO alunos (IdEncarregado,IdTurma,Nome,Morada,Localidade,CC,Sexo,DataNascimento,foto) VALUES ('$idencarregado','$idturma','$nome','$morada','$localidade','$cc','$sexo','$datanascimento','$foto')";

    if (mysqli_query($db, $sql)) {
        echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimEditar';
        header("location: AdminTableAlunos.php");
    } else {
        echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        //header("location: AdminTableAlunos.php");
    }
}