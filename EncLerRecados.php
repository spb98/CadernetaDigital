<?php include("ConfigsDoctype.php"); ?>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '2') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");
}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<?php include("ConfigsHead.php"); ?>
<body
    <?php if (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'SimApagar') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="deleteMessage();"';
    } elseif (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'SimEditar') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="updateMessage();"';
    } elseif (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'SimAdicionar') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="addMessage();"';
    } elseif (isset($_SESSION['ActionTaken']) && $_SESSION['ActionTaken'] === 'ERRO') {
        $_SESSION['ActionTaken'] = 'AcaoNula';
        echo 'onload="errorMessage();"';
    }
    ?>
>

<!-- Left Panel -->

<?php include("EncSideBars.php"); ?>

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
        <div class="header-menu">
            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="LogoutFunc.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!--
    <!-- Header-->
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Recados</strong>
                        </div>
                        <div class="card-body">
                            <form method="post">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Mensagem</th>
                                        <th>Data de Envio</th>
                                        <th>Estado</th>
                                        <th>Marcar como Lido</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $ID = $_SESSION["LoggedId"];

                                    $sql = "SELECT * FROM encarregados WHERE IdUser = $ID ";
                                    $results = mysqli_query($db, $sql);
                                    $NecessarioID = mysqli_fetch_array($results);

                                    //echo 'Id do enc:' . $NecessarioID['IdEncarregado'];
                                    $_SESSION['IdEncarregado'] = $NecessarioID['IdEncarregado'];

                                    $sql = "SELECT * FROM recados WHERE IdEncarregado = '$NecessarioID[IdEncarregado]' AND lido = 'n'";
                                    $results = mysqli_query($db, $sql);
                                    $_SESSION['CLICADO'] = "1";
                                    $datarow = "";
                                    while ($row2 = mysqli_fetch_array($results)) {

                                        if ($row2[8] === 'n') {
                                            $row2[8] = 'Por ler';
                                            $row2[7] = '';
                                        } elseif ($row2[8] === 's') {
                                            $row2[8] = $row2[7];
                                        }

                                        $datarow = $datarow . "<tr>
                                                        <td>$row2[5]</td>
                                                        <td>$row2[6]</td>
                                                        <td>$row2[8]</td>
                                                        <td>
                                                        <center><div class='btn-group' role='group' aria-label='...'>
                                                        <a href=\"#view$row2[0]\" data-toggle=\"modal\"><button type='button' class='btn btn-lg btn-info'><i class=\"fa fa-eye\"></i></button></a>
                                                        </button>
                                                        </div>
                                                        </center>
                      
</td>
                                                        </tr>";
                                    }
                                    echo $datarow;

                                    ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .animated -->

        <?php


        $ID = $_SESSION["LoggedId"];

        $sql = "SELECT * FROM encarregados WHERE IdUser = $ID ";
        $results = mysqli_query($db, $sql);
        $NecessarioID = mysqli_fetch_array($results);

        //echo 'Id do enc:' . $NecessarioID['IdEncarregado'];
        $_SESSION['IdEncarregado'] = $NecessarioID['IdEncarregado'];

        $sql = "SELECT * FROM recados WHERE IdEncarregado = '$NecessarioID[IdEncarregado]'";
        $results = mysqli_query($db, $sql);
        $datarow = "";
        while ($row2 = mysqli_fetch_array($results)) {
            echo "<div class=\"modal fade\" id=\"view$row2[0]\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"largeModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-lg\" role=\"document\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"largeModalLabel\">Confirmação:</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                <p>
                                $row2[5]
                                </p>
                            </div>";
            echo "<div class=\"modal-footer\">";

            if ($row2[9] === "?"){
                echo "<form method=\"post\" action=\"EncLerRecadosFunc.php?id=$row2[0]&comparece=$row2[9]\">";
                echo "<button type=\"submit\" class=\"btn btn-primary\">Marcar como Lido</button>";
                echo "</form>";
                echo "<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cancelar</button>";
            }elseif ($row2[9] === "m"){
                echo "<form method=\"post\" action=\"EncLerRecadosFunc.php?id=$row2[0]&comparece=s\">";
                echo "<button type=\"submit\" class=\"btn btn-success\">Comparecer</button>";
                echo "</form>";
                echo "<form method=\"post\" action=\"EncLerRecadosFunc.php?id=$row2[0]&comparece=n\">";
                echo "<button type=\"submit\" class=\"btn btn-danger\">Não Comparecer</button>";
                echo "</form>";
            }


            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>

    </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>

<script>
    function check(e) {

        alertify.confirm("Aviso", "Tem a certeza que deseja apagar?",
            function () {
                //alert("You have clicked button id = "+e.id+" and button value = "+document.getElementById(e.id).value);
                localStorage.setItem("IdToDelete", document.getElementById(e.id).value);
                //alertify.success('Id --> ' +localStorage.getItem("IdToDelete"));

                window.location.href = "ProfRecadosEnviados.php?delete=" + localStorage.getItem("IdToDelete");
            },
            function () {
                //alertify.message('Teste de cancel');
            });

    }
</script>
<script type="text/javascript">
    function deleteMessage() {
        alertify.success('Informação apagada.');
    }

    function updateMessage() {
        alertify.success('Informação atualizada.');
    }

    function addMessage() {
        alertify.success('Informação adicionada.');
    }

    function errorMessage() {
        alertify.error('Erro Ocurrido.');
    }

</script>


</body>
</html>
