<?php include("ConfigsDoctype.php"); ?>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '1') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<?php include("ConfigsHead.php"); ?>
<body>
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
                    <form method="post" action="ProfRecadosEnviarFunc.php">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header"><strong>Enviar</strong>
                                    <small>Recado</small>
                                </div>
                                <div class="card-body card-block">
                                    <div class="row form-group">
                                        <div class="col col-md-12"><label for="select" class=" form-control-label">Escola:</label>
                                        </div>
                                        <div class="col-12 col-md-5">
                                            <select name="escola" id="schoolselector" class="form-control">
                                                <option value="">Selecione a escola...</option>
                                                <?php

                                                $idprofessor = $_SESSION['IDProf'];

                                                $sql = "SELECT * FROM escolas";
                                                $results = mysqli_query($db, $sql);

                                                $datarow = "";

                                                while ($row2 = mysqli_fetch_array($results)) {
                                                    $datarow = $datarow . "<option value='$row2[0]' >$row2[1]</option>";
                                                }
                                                echo $datarow;
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <?php

                                    $sql = "SELECT * FROM escolas";
                                    $results = mysqli_query($db, $sql);

                                    while ($row = mysqli_fetch_array($results)) {
                                        echo "<div id=\"escola$row[0]\" class=\"turmas row form-group\" style=\"display:none\">";
                                        echo "<div class=\"col col-md-12\"><label for=\"select\" class=\" form-control-label\">Turma:</label>";
                                        echo "</div>";
                                        echo "<div class=\"col-12 col-md-3\">";
                                        echo "<select name=\"turma[]\" id='classselector' class=\"form-control\">";
                                        echo "<option value=\"\">Selecione a turma...</option>";

                                        $idprofessor = $_SESSION['IDProf'];

                                        $sql2 = "SELECT * FROM turmas WHERE IdProfessor = '$idprofessor' AND IdEscola = '$row[0]'";
                                        $results2 = mysqli_query($db, $sql2);

                                        while ($row2 = mysqli_fetch_array($results2)) {
                                            echo "<option value='$row2[0]' >$row2[3]º$row2[4]</option>";
                                        }
                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";

                                        $sql2 = "SELECT * FROM turmas WHERE IdProfessor = '$idprofessor' AND IdEscola = '$row[0]'";
                                        $results2 = mysqli_query($db, $sql2);

                                        while ($row2 = mysqli_fetch_array($results2)) {
                                            $sql3 = "SELECT * FROM alunos WHERE IdTurma = '$row2[0]'";
                                            $results3 = mysqli_query($db, $sql3);

                                            echo "<div id=\"alunos$row2[0]\" class=\"alunos row form-group\" style=\"display:none\">";
                                            echo "<div class=\"col col-md-12\"><label class=\" form-control-label\">Alunos:</label></div>";
                                            echo "<div class=\"col col-md-10\">";
                                            echo "<div class=\"form-check\">";
                                            while ($row3 = mysqli_fetch_array($results3)) {

                                                $foto = '<img width="100" height="100" src="data:image/jpeg;base64,' . base64_encode($row3['Foto']) . '"/>';

                                                echo "<div class=\"checkbox\">";
                                                echo "<label for=\"checkbox$row3[0]\" class=\"form-check-label \">";
                                                echo "<input type=\"checkbox\" id=\"checkbox$row3[0]\" name=\"check_list[]\" value=\"$row3[0]\" class=\"form-check-input\">$row3[3] <br> $foto";
                                                echo "</label>";
                                                echo "</div>";
                                            }
                                            echo " </div>";
                                            echo " </div>";
                                            echo " </div>";
                                        }
                                    }
                                    ?>

                                    <div class="form-group"><label
                                                class=" form-control-label">Mensagem:</label><textarea
                                                required name="textarea-input" id="textarea-input" rows="9"
                                                maxlength="5000"
                                                placeholder="Vim por este meio..." class="form-control"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-dot-circle-o"></i> Enviar
                                    </button>
                                </div>
                            </div>
                        </div>
                </div><!-- .animated -->
            </div><!-- .content -->


        </div><!-- /#right-panel -->

        <!-- Right Panel -->


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
            $(function () {
                $('#schoolselector').change(function () {
                    //Esconde os outros selects
                    $('.turmas').hide();
                    //mostra o correto
                    $('#' + 'escola' + $(this).val()).show();
                    //faz reset ás checkboxes
                    $('input:checkbox').removeAttr('checked');
                    //esconde-as
                    $('.alunos').hide();
                    //reseta selects
                    $('#classselector option').prop('selected', function () {
                        return this.defaultSelected;
                    });
                });
            });

            $(function () {
                $('#classselector').change(function () {
                    $('.alunos').hide();
                    $('#' + 'alunos' + $(this).val()).show();
                    $('input:checkbox').removeAttr('checked');
                });
            });

        </script>

</body>
</html>
