<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '1') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sufee Admin - HTML5 Admin Template</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
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
                        <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                        <a class="nav-link" href="LogoutFunc.php"><i class="fa fa-power -off"></i>Logout</a>
                    </div>
                </div>
            </div>
        </div>

    </header><!--
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Table</a></li>
                        <li class="active">Recados</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

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
                                                <option  value="">Selecione a escola...</option>
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

                                        $sql2 = "SELECT * FROM turmas WHERE IdProfessor = '$idprofessor' AND IdEscolas = '$row[0]'";
                                        $results2 = mysqli_query($db, $sql2);

                                        while ($row2 = mysqli_fetch_array($results2)) {
                                            echo "<option value='$row2[0]' >$row2[3]º$row2[4]</option>";
                                        }
                                        echo "</select>";
                                        echo "</div>";
                                        echo "</div>";

                                        $sql2 = "SELECT * FROM turmas WHERE IdProfessor = '$idprofessor' AND IdEscolas = '$row[0]'";
                                        $results2 = mysqli_query($db, $sql2);

                                        while ($row2 = mysqli_fetch_array($results2)) {
                                            $sql3 = "SELECT * FROM alunos WHERE IdTurma = '$row2[0]'";
                                            $results3 = mysqli_query($db, $sql3);

                                            echo "<div id=\"alunos$row2[0]\" class=\"alunos row form-group\" style=\"display:none\">";
                                            echo "<div class=\"col col-md-12\"><label class=\" form-control-label\">Alunos:</label></div>";
                                            echo "<div class=\"col col-md-10\">";
                                            echo "<div class=\"form-check\">";
                                            while ($row3 = mysqli_fetch_array($results3)) {

                                                $foto = '<img width="100" height="100" src="data:image/jpeg;base64,' . base64_encode($row3['foto']) . '"/>';

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
                                                required name="textarea-input" id="textarea-input" rows="9" maxlength="5000"
                                                placeholder="Vim por este meio..." class="form-control"></textarea>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-12 content-right">
                                            <button class="btn btn-primary form-btn" type="submit">Fazer Alterações
                                            </button>
                    </form>
                    <a href="AdminTableRecados.php">
                        <button class="btn btn-danger form-btn" type="button">Cancelar</button>
                    </a>
                </div>
                <br><br>
            </div>
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
            $('#classselector option').prop('selected', function() {
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
