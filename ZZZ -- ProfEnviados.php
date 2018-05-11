<!DOCTYPE html>
<html style="background-color:rgb(255,255,255);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V1.3Pap</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
    <link rel="stylesheet" href="assets/css/Checkbox-Button.css">
    <link rel="stylesheet" href="assets/css/Checkbox-Button1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/LightBox.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table.css">
    <link rel="stylesheet" href="assets/css/MUSA_panel-table1.css">
    <link rel="stylesheet" href="assets/css/Navigation-Menu.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form.css">
    <link rel="stylesheet" href="assets/css/Table-with-search1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/OcOrato---Login-form1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu1.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/textArea.css">
</head>

<body id="bodyID">
    <div id="wrapper" style="background-color:#ffffff;">
        <div id="sidebar-wrapper" style="background-color:#000000;margin-top:-20px;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="#">[Nome Professor] </a></li>
                <li> <a href="#">Enviar Recados </a></li>
                <li> <a href="#">Recados Enviados</a></li>
                <li> <a href="#">Logout </a></li>
            </ul>
        </div>
        <div class="page-content-wrapper" style="background-color:#ffffff;">
            <div class="container-fluid" style="background-color:#ffffff;"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h1>Recados Enviados </h1>
                        </div>
                        <div>
<form class="form-inline">
  <div class="form-group">
    <label >Ano</label>
     <select  class="form-control" >
         <option>Opção</option>
      </select>
  </div>
<form class="form-inline">
  <div class="form-group">
    <label >Turma</label>
     <select  class="form-control" >
         <option>Opção</option>
      </select>
  </div>
</form>
                        <div id="tableLinda">
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="O que deseja procurar?">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th class="col-md-5 col-xs-5">Recados</th>
      <th class="col-md-4 col-xs-4">Alunos a que foi enviado</th>
      <th class="col-md-3 col-xs-3">Se foi Lido</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> Sem resultados</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Lindo recado nº1</td>
      <td align="center">Aluno nº1, Aluno nº2, Aluno nº3
    </td>
      <td>Talvez</td>
    </tr>
    <tr>
      <td>Lindo recado nº2</td>
      <td align="center">Aluno nº4, Aluno nº5, Aluno nº6
    </td>
      <td>Sim</td>
    </tr>
    <tr>
      <td>Lindo recado nº3</td>
     <td align="center">Aluno nº7, Aluno nº8, Aluno nº9
    </td>
      <td>Não</td>
    </tr>
      <tr>
      
      <td>Lindo recado nº4</td>
      <td align="center">Aluno nº10, Aluno nº11, Aluno nº12
    </td>
      <td>Quê?</td>
    </tr>
  </tbody>
</table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/LightBox.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/Table-with-search.js"></script>
</body>

</html>