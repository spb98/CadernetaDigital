<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idprof = $_SESSION['IDProf'];
    $escola = $_POST['escola'];
    $turma = $_POST['turma'];
    $alunos = $_POST['check_list'];
    $mensagem = $_POST['textarea-input'];
    $dataenvio = date("Y/m/d");

    if (empty($turma) || empty($alunos) || $mensagem == "" || $escola == "") {
        //header("location: ProfRecadosEnviar.php");
    }

    $N = count($turma);
    //echo "Turma: ";
    for ($i = 0; $i < $N; $i++) {
        //  echo($turma[$i] . " ");
        if ($turma[$i] != "") {
            $turmaselecionada = $turma[$i];
        }
    }
    //echo "<br>";

    $N = count($alunos);
    //echo("Alunos selecionados $N: ");
    for ($i = 0; $i < $N; $i++) {
        //    echo($alunos[$i] . " ");
    }
    //  echo "<br>";

    //echo 'Escola: ' . $escola . '<br>';
    //echo 'A mensagem: ' . $mensagem . '<br>';
    //echo 'A turma selecionada é: ' . $turmaselecionada;


    FALTA ID DO ENCARREGADO !!"!!!!!!!!!(=)!UJ=)(!J!=)J"

    $sql = "INSERT INTO recados (IdProfessores,IdEscolas,IdEncarregados,Mensagem,DataEnvio,Lido)
 VALUES ('$idprof','______________________________________________________________','$mensagem','$dataenvio','n')";
    /*
    if (mysqli_query($db, $sql)) {
        //echo "Record added successfully";
        $_SESSION['ActionTaken'] = 'SimAdicionar';
        header("location: AdminTableTurmas.php");
    } else {
        //echo "Error adding record: " . mysqli_error($db);
        $_SESSION['ActionTaken'] = 'ERRO';
        header("location: AdminTableTurmas.php");
    }

*/
}