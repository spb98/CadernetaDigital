<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Vai buscar o id do professor que enviou
    $idprof = $_SESSION['IDProf'];
    //Vai buscar o id da escola selecionada
    $escola = $_POST['escola'];
    //Vai buscar o id das turmas
    $turma = $_POST['turma'];
    //Vai buscar o id dos alunos selecionados
    $alunos = $_POST['check_list'];
    //Vai buscar a mensagem escrita
    $mensagem = $_POST['textarea-input'];
    //Vai buscar a data de hoje
    $dataenvio = date("Y-m-d");
    //Vai definir o array para o id do encarregado (de momento vazio)
    $encarregados = array();

    //Se algo tiver vazio volta
    if (empty($turma) || empty($alunos) || empty($mensagem) || empty ($escola) || empty ($idprof)) {
        echo "FALTAM VALORES!";
        //header("location: ProfRecadosEnviar.php");
    }

    //Verifica a turma selecionada
    $N = count($turma);
    //echo "Turma: ";
    for ($i = 0; $i < $N; $i++) {
        //  echo($turma[$i] . " ");
        if ($turma[$i] != "") {
            $turmaselecionada = $turma[$i];
        }
    }
    //echo "<br>";

    //Se algo tiver vazio volta
    if (empty($turmaselecionada)) {
        echo "FALTAM VALORES!";
        //header("location: ProfRecadosEnviar.php");
    }

    //Vê os alunos selecionados

    //Variavel para usar em sql
    $alunosv2 = '(' . implode(',', $alunos) . ')';
    //echo $alunosv2 . "<br>";

    //Vai buscar os Id's de encarregado de educação equivalentes aos alunos selecionados
    $sql = "SELECT * FROM alunos WHERE IdAlunos IN " . $alunosv2;
    $results = mysqli_query($db, $sql);

    //Está a por os valores no array
    while ($row = mysqli_fetch_array($results)) {
        array_push($encarregados, "$row[1]");
    }

    //Testes para ver se tudo passou bem
    $N = count($encarregados);
    echo "Encarregados: ";
    for ($i = 0; $i < $N; $i++) {
        echo($encarregados[$i] . " ");
    }

    //Se algo tiver vazio volta
    if (empty($encarregados)) {
        echo "FALTAM VALORES!";
        //header("location: ProfRecadosEnviar.php");
    }

    echo '<br>Escola: ' . $escola . '<br>';
    echo 'A mensagem: ' . $mensagem . '<br>';
    echo 'Professor: ' . $idprof . '<br>';
    echo 'Data de envio: ' . $dataenvio . '<br>';
    echo 'A turma selecionada é: ' . $turmaselecionada;

    $N = count($encarregados);
    for ($i = 0; $i < $N; $i++) {
        $sql = "INSERT INTO recados (IdProfessores,IdEscolas,IdEncarregados,Mensagem,DataEnvio,Lido)
 VALUES ('$idprof','$escola','$encarregados[$i]','$mensagem','$dataenvio','n')";

        if (mysqli_query($db, $sql)) {
            //echo "Record added successfully";
            $_SESSION['ActionTaken'] = 'SimAdicionar';
            header("location: ProfRecadosEnviados.php");
        } else {
            //echo "Error adding record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
            header("location: ProfRecadosEnviados.php");
        }
    }

}