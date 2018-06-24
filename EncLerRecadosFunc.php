<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '2') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");
}

$idEncarregado = $_SESSION['IdEncarregado'];
$idRecados = $_GET['id'];
$comparece = $_GET['comparece'];
$hoje = date("Y-m-d");

//Mostra os dados.
/*
echo "O ID do encarregado é: " . $idEncarregado . "<br>";
echo "O ID do recado é: " . $idRecados . "<br>";
echo "Hoje é dia: " . $hoje . "<br>";
echo "O comparecimento é : " . $comparece . "<br>";
*/

$sql = "UPDATE recados SET Lido = 's', DataConfirmacao='$hoje', Comparece='$comparece' WHERE IdEncarregado ='$idEncarregado' AND IdRecado = '$idRecados'";




$results = mysqli_query($db, $sql);


if (mysqli_query($db, $sql)) {
    //echo "Record updated successfully";
    $_SESSION['ActionTaken'] = 'SimEditar';
    header("location: EncLerRecados.php");
} else {
    echo "Error updating record: " . mysqli_error($db);
    $_SESSION['ActionTaken'] = 'ERRO';
    //header("location: EncLerRecados.php");


}
