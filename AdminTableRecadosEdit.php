<?php include("ConfigsDoctype.php"); ?>
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
    $sql = "SELECT * FROM recados WHERE IdRecado = '$idnumber'";
    $results = mysqli_query($db, $sql);

    $row2 = mysqli_fetch_array($results);
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


    <form method="post" class="" action="AdminTableRecadosEditFunc.php?edit=<?php echo $row2[0]; ?>"
          enctype="multipart/form-data">
        <div class="card">
            <div class="card-header">
                <strong>Editar </strong> recados:
            </div>
            <div class="card-body card-block">
                <div class="form-group"><label class="form-control-label">ID do recado:</label><input
                            type="number" disabled value="<?php echo $row2[0]; ?>" class="form-control"><span
                            class="help-block">Valor é inserido automaticamente pela base de dados</span></div>

                <div class="form-group"><label class="form-control-label">ID do professor:</label><input
                            type="number" name="IdProfessor" value="<?php echo $row2[1]; ?>" class="form-control"><span
                            class="help-block">Valor númerico que corresponde a um professor na base de dados</span>
                </div>

                <div class="form-group"><label class="form-control-label">ID da escola:</label><input
                            type="number" name="IdEscola" value="<?php echo $row2[2]; ?>" class="form-control"><span
                            class="help-block">Valor númerico que corresponde a um escola na base de dados</span></div>

                <div class="form-group"><label class="form-control-label">ID do encarregado:</label><input
                            type="number" name="IdEncarregado" value="<?php echo $row2[3]; ?>"
                            class="form-control"><span
                            class="help-block">Valor númerico que corresponde a um encarregado na base de dados</span>
                </div>

                <div class="form-group"><label class="form-control-label">ID do aluno:</label><input
                            type="number" name="IdAluno" value="<?php echo $row2[4]; ?>" class="form-control"><span
                            class="help-block">Valor númerico que corresponde a um aluno na base de dados</span></div>

                <div class="form-group"><label class="form-control-label">Mensagem:</label><input
                            type="text" maxlength="100" name="Mensagem" value="<?php echo $row2[5]; ?>"
                            class="form-control"><span
                            class="help-block">Mensagem do professor que deverá ser adicionado</span></div>

                <div class="form-group"><label class="form-control-label">Data de Envio:</label><input
                            type="date" name="DataEnvio" value="<?php echo $row2[6]; ?>"
                            class="form-control"><span
                            class="help-block">Se o recado foi lido</span></div>

                <div class="form-group"><label class="form-control-label">Data de Confirmação:</label><input
                            type="date" name="DataConfirmacao" value="<?php echo $row2[7]; ?>"
                            class="form-control"><span
                            class="help-block">Se o recado foi lido</span></div>

                <div class="form-group"><label class="form-control-label">Se foi lido:</label><input
                            type="text" maxlength="1" name="Lido" value="<?php echo $row2[8]; ?>"
                            class="form-control"><span
                            class="help-block">Se o recado foi lido</span></div>

                <div class="form-group"><label class="form-control-label">Se tem confirmação:</label><input
                            type="text" maxlength="1" name="Comparece" value="<?php echo $row2[9]; ?>"
                            class="form-control"><span
                            class="help-block">Se o encarregado comparece ou não (s/n/?/.) que deverá ser adicionado</span>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fa fa-dot-circle-o"></i> Submeter
                </button>
                <button type="reset" class="btn btn-info btn-sm">
                    <i class="fa fa-ban"></i> Reset
                </button>
                <a href="AdminTableRecados.php">
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
