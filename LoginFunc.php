<?php

include("ConfigsDB.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT IdUser, Nivel, Username FROM users WHERE Username = '$myusername' and Password = '$mypassword' OR Email = '$myusername' and Password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        //Declara que não há erros
        unset($_SESSION['loginError']);

        //Guarda o id, nivel e username do user que fez login
        $_SESSION["LoggedId"] = $row["IdUser"];
        $_SESSION["LoggedNivel"] = $row["Nivel"];
        $_SESSION["LoggedUsername"] = $row["Username"];

        //DEBUG: Mostra o id e o nivel do user que fez login
        //echo $_SESSION["LoggedId"] . " --- " . $_SESSION["LoggedNivel"] ;

        if ($_SESSION["LoggedNivel"] === '0'){
            header("location: AdminTableEscolas.php");
        }elseif ($_SESSION["LoggedNivel"] === '1'){
            header("location: ProfEnviar.php");
        }elseif ($_SESSION["LoggedNivel"] === '2'){
            header("location: EncEnviados.php");
        }else{
            echo 'Erro na database, contactar criador do site.';
        }

    } else {-
        //Declara que há erros e vai para o index novamente
        $_SESSION["loginError"] = 'sim';
        unset($_SESSION['LoggedId']);
        unset($_SESSION['LoggedNivel']);
        unset($_SESSION['LoggedUsername']);
        header("location: index.php");
    }
}
?>