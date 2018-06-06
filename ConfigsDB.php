<?php
session_start();

//Define as variaveis para entrar na database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'toor123');
define('DB_DATABASE', 'dtbpap');


//Entra na database
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (mysqli_ping($db)) {
    //echo 'Our connection is ok!';
} else {
    echo 'ERRO na conexão!';
}


/*Sessions

$_SESSION["loginError"]         --> Verifica se ouve algum erro no login (password ou user errado)
$_SESSION["LoggedId"]           --> Id do user que fez login
$_SESSION["LoggedUsername"]     --> Username do user que fez login
$_SESSION["LoggedNivel"]        --> Nivel do user que fez login
$_SESSION['ActionTaken']        --> Ação feita pelo user (eliminar/editar/adicionar/etc) ('AcaoNula' === Nada para fazer)
*/
