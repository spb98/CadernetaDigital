<?php include("ConfigsDoctype.php"); ?>
<?php include("ConfigsDB.php");

//Verifica se o user tem o login feito e credenciais

if (isset($_SESSION["loginError"]) || $_SESSION["LoggedNivel"] != '0') {
    echo 'Erro de credenciais.';
    header("location: LogoutFunc.php");

}
?>

<html class="no-js" lang=""> <!--<![endif]-->
<?php include("ConfigsHead.php"); ?>
<body>

<!-- Left Panel -->

<?php include("AdminTableSideBars.php"); ?>

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

    <form method="post" class="" action="AdminTableUsersAddFunc.php" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <strong>Adicionar </strong> utilizador:
            </div>
            <div class="card-body card-block">
                <div class="form-group"><label class="form-control-label">ID do utilizador:</label><input
                            type="number" disabled placeholder="Automático" class="form-control"><span
                            class="help-block">Valor é inserido automaticamente pela base de dados.</span></div>

                <div class="form-group"><label class="form-control-label">Username:</label><input
                            type="text" required name="Username" placeholder="Exemplo: professor123123"
                            class="form-control"><span
                            class="help-block"></span>
                </div>

                <div class="form-group"><label class="form-control-label">Password:</label><input
                            type="password" required name="Password" placeholder="Exemplo: password123"
                            class="form-control"><span
                            class="help-block"></span>
                </div>

                <div class="form-group"><label class="form-control-label">Email:</label><input
                            type="email" required name="Email" placeholder="Exemplo: asdasd@gmail.com" class="form-control"><span
                            class="help-block"></span>
                </div>

                <div class="form-group"><label class="form-control-label">Nível:</label><input
                            type="number" required name="Nivel" placeholder="Exemplo: 0" class="form-control"><span
                            class="help-block">Corresponde ao nível (0/1/2):</span><br>
                    <span class="help-block">O '0' corresponde ao nível de administrador.</span><br>
                    <span class="help-block">O '1' corresponde ao nível de professor.</span><br>
                    <span class="help-block">O '2' corresponde ao nível de encarregado de educação.</span>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submeter
                </button>
                <button type="reset" class="btn btn-info btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
                <a href="AdminTableUsers.php">
                    <button type="button" class="btn btn-danger btn-sm">
                        <i class="fa  fa-arrow-circle-o-right"></i> Cancelar
                    </button>
                </a>
            </div>
        </div>
    </form>
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
