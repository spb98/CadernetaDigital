<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '2') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");
}

//Mostra o id do encarregado e do id a marcar.
//echo $_SESSION['IdEncarregado'] . "<br>" . $_GET['id'];

$idEncarregado = $_SESSION['IdEncarregado'];
$idRecados = $_GET['id'];
$hoje = date("Y-m-d");

$sql = "UPDATE recados SET Lido = 's', DataConfirmacao='$hoje' WHERE IdEncarregado ='$idEncarregado' AND IdRecado = '$idRecados'";

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
