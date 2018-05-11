<!DOCTYPE html>
<html style="background-color:rgb(255,255,255);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V1.3Pap</title>
    <?php include("ConfigsAssets.php") ?>
</head>

<body id="bodyID">
<div id="wrapper" style="background-color:#ffffff;">
    <div id="sidebar-wrapper" style="background-color:#000000;margin-top:-20px;">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#">[Nome Professor] </a></li>
            <li><a href="#">Enviar Recados </a></li>
            <li><a href="#">Recados Enviados</a></li>
            <li><a href="#">Logout </a></li>
        </ul>
    </div>
    <div class="page-content-wrapper" style="background-color:#ffffff;">
        <div class="container-fluid" style="background-color:#ffffff;"><a class="btn btn-link" role="button"
                                                                          href="#menu-toggle" id="menu-toggle"><i
                        class="fa fa-bars"></i></a>
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Enviar Recados </h1>
                    </div>
                    <div>
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Ano</label>
                                <select class="form-control">
                                    <option>Opção</option>
                                </select>
                            </div>
                            <form class="form-inline">
                                <div class="form-group">
                                    <label>Turma</label>
                                    <select class="form-control">
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
                                        <th>Enviar</th>
                                        <th class="col-md-5 col-xs-5">Nome Completo</th>
                                        <th class="col-md-4 col-xs-4">Foto</th>
                                        <th class="col-md-3 col-xs-3">Encarregado</th>
                                    </tr>
                                    <tr class="warning no-result">
                                        <td colspan="4"><i class="fa fa-warning"></i> Sem resultados</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="[ form-group ]">
                                                <input type="checkbox" name="fancy-checkbox-success"
                                                       id="fancy-checkbox-success" autocomplete="off"/>
                                                <div class="[ btn-group ]">
                                                    <label for="fancy-checkbox-success" class="[ btn btn-success ]">
                                                        <span class="[ glyphicon glyphicon-ok ]"></span>
                                                        <span> </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </th>
                                        <td>Lindo nome nº1</td>
                                        <td align="center">

                                            <img height="50px" src="assets/img/logo.png"
                                                 onclick="openModal();currentSlide(1)" class="hover-shadow">
                                        </td>
                                        <td>Encarregado 1</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-success">
                                                    <input type="checkbox" autocomplete="off" checked>
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>Lindo nome nº2</td>
                                        <td align="center"><img height="50px" src="assets/img/background.jpg"
                                                                onclick="openModal();currentSlide(2)"
                                                                class="hover-shadow">
                                        </td>
                                        <td>Encarregado 2</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-success">
                                                    <input type="checkbox" autocomplete="off" checked>
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>Lindo nome nº3</td>
                                        <td align="center"><img height="50px" src="assets/img/logo.png"
                                                                onclick="openModal();currentSlide(3)"
                                                                class="hover-shadow">
                                        </td>
                                        <td>Encarregado 3</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-success">
                                                    <input type="checkbox" autocomplete="off" checked>
                                                    <span class="glyphicon glyphicon-ok"></span>
                                                </label>
                                            </div>
                                        </th>
                                        <td>Lindo nome nº4</td>
                                        <td align="center"><img height="50px" src="assets/img/background.jpg"
                                                                onclick="openModal();currentSlide(4)"
                                                                class="hover-shadow">
                                        </td>
                                        <td>Encarregado 4</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h2>Tópico</h2>
                            <input maxlength="50" id="topico" type="text">

                            <h2>Mensagem</h2>
                            <textarea maxlength="1500" id="mensagem"></textarea>
                            <button class="btn btn-default btn-lg" type="button" id="butonas"
                                    style="z-index: 1; width:20%;height:100%;margin-right10px;background-color:rgb(184,144,76);color:rgb(255,255,255);margin-right:0px;padding-left:16px;margin-top:0px;margin-left:80%;">
                                Enviar
                            </button>

                            <!--É perciso estar no fim -->
                            <div id="myModal" class="modal">
                                <span class="close cursor" onclick="closeModal()">&times;</span>
                                <div class="modal-content">

                                    <div class="mySlides">
                                        <img src="assets/img/logo.png" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <img src="assets/img/background.jpg" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <img src="assets/img/logo.png" style="width:100%">
                                    </div>

                                    <div class="mySlides">
                                        <img src="assets/img/background.jpg" style="width:100%">
                                    </div>

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