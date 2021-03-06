<?php include("ConfigsDoctype.php");?>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '1') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<?php include("ConfigsHead.php");?>
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

    if (isset($_GET['delete'])) {
        $delete_id = $_GET['delete'];

        $sql = "DELETE FROM recados WHERE IdRecado = $delete_id";

        if (mysqli_query($db, $sql)) {
            //echo "Record deleted successfully";
            $_SESSION['ActionTaken'] = 'SimApagar';
        } else {
            //echo "Error deleting record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
        }
        header("location: ProfRecadosEnviados.php");
    }
    ?>
>

<!-- Left Panel -->

<?php include("ProfSideBars.php"); ?>

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
                            <form method="post" action="EEEEEEEEEEEEEEEEEEEEEEEEEEEE.php">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Mensagem</th>
                                        <th>Data de Envio</th>
                                        <th>Estado</th>
                                        <th>Ação</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $ID = $_SESSION["LoggedId"];

                                    $sql = "SELECT * FROM professores WHERE IdUser = $ID ";
                                    $results = mysqli_query($db, $sql);
                                    $NecessarioID = mysqli_fetch_array($results);

                                    //echo 'Id do proff:' . $NecessarioID['IdProfessor'];
                                    $_SESSION['IDProf'] = $NecessarioID['IdProfessor'];

                                    $sql = "SELECT * FROM recados WHERE IdProfessor = '$NecessarioID[IdProfessor]'";
                                    $results = mysqli_query($db, $sql);

                                    $datarow = "";
                                    while ($row2 = mysqli_fetch_array($results)) {


                                        echo "<tr>";
                                        echo "<td>$row2[5]</td>";
                                        echo "<td>$row2[6]</td>";
                                        if ($row2[8] === 'n') {
                                            $row2[8] = 'Ainda não foi lido.';
                                            $row2[7] = '';
                                            echo " <td>$row2[8]</td>";
                                            echo "<td><center>";
                                            echo "<button id=\"delete$row2[0]\" onclick=\"check(this);\" value=\"$row2[0]\" type=\"button\" name=\"delete\" class=\"btn btn-danger\"><em class=\"fa fa-trash\"></em></button>";
                                            echo "</center></td>";
                                        } elseif ($row2[8] === 's') {
                                            $row2[8] = 'Lido no dia: ' . $row2[7];
                                            echo " <td>$row2[8]</td>";
                                            echo "<td><center>";
                                            echo "<button disabled id=\"delete$row2[0]\" onclick=\"check(this);\" value=\"$row2[0]\" type=\"button\" name=\"delete\" class=\"btn btn-danger\"><em class=\"fa fa-ban\"></em></button>";
                                            echo "</center></td>";
                                        }

                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
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
