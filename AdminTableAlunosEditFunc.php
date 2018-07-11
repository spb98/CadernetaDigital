<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['edit'])) {
        $id = $_GET['edit'];
    } else {
        echo "Error getting id record.";
    }

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
    if ($check !== false) {
        $image = $_FILES['Foto']['tmp_name'];
        $foto = addslashes(file_get_contents($image));
    }


    if (empty($foto)) {

        echo "Não há foto.";

        $sql = "UPDATE alunos SET IdEncarregado ='$idencarregado', IdTurma='$idturma', Nome='$nome', Morada='$morada', Localidade='$localidade', CC='$cc', Sexo='$sexo', DataNascimento='$datanascimento'
            WHERE IdAluno ='$id'";

        if (mysqli_query($db, $sql)) {
            echo "Record updated successfully";
            $_SESSION['ActionTaken'] = 'SimEditar';
            header("location: AdminTableAlunos.php");

        } else {
            echo "Error updating record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            //header("location: AdminTableAlunos.php");
        }


    } else {
        echo "Há foto.";

        $sql = "UPDATE alunos SET IdEncarregado ='$idencarregado', IdTurma='$idturma', Nome='$nome', Morada='$morada', Localidade='$localidade', CC='$cc', Sexo='$sexo', DataNascimento='$datanascimento', Foto = '$foto'
            WHERE IdAluno ='$id'";

        if (mysqli_query($db, $sql)) {
            echo "Record updated successfully";
            $_SESSION['ActionTaken'] = 'SimEditar';
            header("location: AdminTableAlunos.php");
        } else {
            echo "Error updating record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            //header("location: AdminTableAlunos.php");
        }

    }

}