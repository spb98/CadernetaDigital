<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '0') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //se for clickado em algum botão edit
    if (isset($_POST['edit'])) {
        $idnumber = mysqli_real_escape_string($db, $_POST['edit']);
    } else {
        header("location: AdminTableRecados.php");
    }

    //Arranja tudo da tabela Recados
    $sql = "SELECT * FROM recados WHERE IdRecados = '$idnumber'";
    $results = mysqli_query($db, $sql);

    $row2 = mysqli_fetch_array($results);
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

<?php include("AdminTableSideBars.php");?>

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
                    <h1> Editar a informação do recado:</h1>
                    <hr></hr>
                    <form method="post" action="AdminTableRecadosEditFunc.php?edit=<?php echo $row2[0]; ?>">
                        <div>
                            <div class="form-group"><label>ID:</label><input disabled
                                                                             value="<?php echo $row2[0]; ?>"
                                                                             class="form-control" type="text"
                                                                             name="id"></div>
                        </div>
                        <div>
                            <div class="form-group"><label>Id de Professor:</label><input value="<?php echo $row2[1]; ?>"
                                                                                     class="form-control"
                                                                                     type="text"
                                                                                     name="IdProfessores"></div>
                        </div>
                        <div>
                            <div class="form-group"><label>Id da Escola:</label><input value="<?php echo $row2[2]; ?>"
                                                                                class="form-control"
                                                                                type="text" autocomplete="off"
                                                                                required="" name="IdEscolas"></div>
                        </div>
                        <div>
                            <div class="form-group"><label>Id doEncarregado:</label><input value="<?php echo $row2[3]; ?>"
                                                                                     class="form-control"
                                                                                     type="text"
                                                                                     name="IdEncarregados"
                                                                                     autocomplete="off"
                                                                                     required=""></div>
                        </div>
                        <div >
                            <div class="form-group"><label>Mensagem:</label><input value="<?php echo $row2[4]; ?>"
                                                                                   class="form-control"
                                                                                   type="text" name="Mensagem"
                                                                                   autocomplete="off" required="">
                            </div>
                        </div>
                        <div >
                            <div class="form-group"><label>DataEnvio:</label><input value="<?php echo $row2[5]; ?>"
                                                                                   class="form-control"
                                                                                   type="date" name="DataEnvio"
                                                                                   autocomplete="off" required="">
                            </div>
                        </div>
                        <div >
                            <div class="form-group"><label>Datade Confirmação:</label><input value="<?php echo $row2[6]; ?>"
                                                                                   class="form-control"
                                                                                   type="date" name="DataConfirmacao"
                                                                                   autocomplete="off">
                            </div>
                        </div>
                        <div >
                            <div class="form-group"><label>Se foi Lido:</label><input value="<?php echo $row2[7]; ?>"
                                                                                   class="form-control"
                                                                                   type="text" name="Lido"
                                                                                   autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 content-right">
                                <button class="btn btn-primary form-btn" type="submit">Fazer Alterações</button>
                    </form>
                    <a href="AdminTableRecados.php">
                        <button class="btn btn-danger form-btn" type="button">Cancelar</button>
                    </a>
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


</body>
</html>
