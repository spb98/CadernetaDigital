<!doctype html>

<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '0') {
    echo 'Erro de credenciais.';
    header("location: index.php");

}
?>

<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/themes/default.min.css"/>


</head>
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

        $sql = "DELETE FROM alunos WHERE IdAlunos = $delete_id";

        if (mysqli_query($db, $sql)) {
            //echo "Record deleted successfully";
            $_SESSION['ActionTaken'] = 'SimApagar';
        } else {
            //echo "Error deleting record: " . mysqli_error($db);
            $_SESSION['ActionTaken'] = 'ERRO';
        }
        header("location: AdminTableAlunos.php");
    }
    ?>
>

<!-- Left Panel -->

<?php include("AdminTableSideBars.php");?>

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header  id="header" class="header">

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
                        <li class="active">Alunos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Alunos</strong>
                        </div>
                        <div class="card-body">
                            <form method="post" action="AdminTableAlunosEdit.php">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Morada</th>
                                    <th>Localidade</th>
                                    <th>CC</th>
                                    <th>Sexo</th>
                                    <th>Data de Nascimento</th>
									<th>Foto</th>
                                    <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody >
                                <?php
                                $sql = "SELECT * FROM alunos";
                                $results = mysqli_query($db, $sql);

                                $datarow = "";
                                while ($row2 = mysqli_fetch_array($results)) {
									
									//echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/>';
									$foto = '<img src="data:image/jpeg;base64,'.base64_encode( $row2['foto'] ).'"/>';
                                    $datarow = $datarow . "<tr>
                                                        <td>$row2[2]</td>
                                                        <td>$row2[3]</td>
                                                        <td>$row2[4]</td>
                                                        <td>$row2[5]</td>
                                                        <td>$row2[6]</td>
                                                        <td>$row2[7]</td>
														<td>$foto</td>
                                                        <td><button value='$row2[0]' type='submit' name='edit' class=\"btn btn-default\"><em class=\"fa fa-pencil\"></em>
                                                            <button id='delete$row2[0]' onclick='check(this);' value='$row2[0]' type='button' name='delete' class=\"btn btn-danger\"><em class=\"fa fa-trash\"></em></button></td>
                                                        </tr>";
                                }
                                echo $datarow;
                                ?>
                                </tbody>
                            </table>
                            <button type="button" onclick="location.href = 'AdminTableAlunosAdd.php';"
                                    class="btn btn-success"><em class="fa fa-plus"></em></button>
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

                window.location.href = "AdminTableAlunos.php?delete=" + localStorage.getItem("IdToDelete");
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
