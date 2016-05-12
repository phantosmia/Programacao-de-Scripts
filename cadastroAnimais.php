  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <head>
  <script src="js/sweetalert.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript">
      // Original JavaScript code by Chirp Internet: www.chirp.com.au
      // Please acknowledge use of this code by including this header.
      var modal_init = function() {
        modalWrapper = document.getElementById("modal_wrapper");
        var modalWindow  = document.getElementById("modal_window");
        var openModal = function(e)
        {
          modalWrapper.className = "overlay";
          var overflow = modalWindow.offsetHeight - document.documentElement.clientHeight;
          if(overflow > 0) {
            modalWindow.style.maxHeight = (parseInt(window.getComputedStyle(modalWindow).height) - overflow) + "px";
          }
          modalWindow.style.marginTop = (-modalWindow.offsetHeight)/2 + "px";
          modalWindow.style.marginLeft = (-modalWindow.offsetWidth)/2 + "px";
          e.preventDefault ? e.preventDefault() : e.returnValue = false;
        };

         closeModal = function(e)
        {
          modalWrapper.className = "";
          e.preventDefault ? e.preventDefault() : e.returnValue = false;
        };

        var clickHandler = function(e) {
          if(!e.target) e.target = e.srcElement;
          if(e.target.tagName == "DIV") {
            if(e.target.id != "modal_window") closeModal(e);
          }
        };
        var keyHandler = function(e) {
          if(e.keyCode == 27) closeModal(e);
        };
        if(document.addEventListener) {
          document.getElementById("modal_open").addEventListener("click", openModal, false);
          document.getElementById("modal_close").addEventListener("click", closeModal, false);
        } else {
         document.getElementById("modal_open").attachEvent("onclick", openModal);
          document.getElementById("modal_close").attachEvent("onclick", closeModal);
        }
      };
    </script>

    <script src="js/index.js"></script>
    <script src="js/jsmin2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dd.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/ng-file-upload-shim.min.js"></script>
    <script src="js/ng-file-upload.min.js"></script>
    <script>
  var loadFile = function(event) {
  output = document.getElementById('output');
  output.src = URL.createObjectURL(event.target.files[0]);
  };
  </script>
    <script type="text/javascript">

      if(document.addEventListener) {
        //document.getElementById("modal_feedback").addEventListener("submit", checkForm, false);
        document.addEventListener("DOMContentLoaded", modal_init, false);

      } else {
        //document.getElementById("modal_feedback").attachEvent("onsubmit", checkForm);
        window.attachEvent("onload", modal_init);
      }

    </script>
    <script>
    var myApp = angular.module('app', ['ngFileUpload']);
    myApp.controller('animalsCtrl',['$scope','Upload','$timeout','$http', function($scope, Upload,$timeout,$http) {
      var closeModal = function()
      {
        modalWrapper.className = "";

      };
      $scope.clearForm = function(){
      $scope.endereco = "";
      $scope.nomeAnimal = "";
      $scope.descricao = "";
      $scope.file = "";
      $scope.tipoAnimal = "";
      $scope.sexo = "";

    }

    $scope.createAnimal = function(file){
      file.upload = Upload.upload({
        url: 'php/insertAnimais.php',
        data: {endereco: $scope.endereco,nomeAnimal:$scope.nomeAnimal,descricao:$scope.descricao,tipoAnimal:$scope.tipoAnimal,sexo:$scope.sexo, estado:$scope.estado,cidade:$scope.cidade, file: file},
      });
      $("#wait").css("display", "block");
      file.upload.then(function (response) {
   $scope.getAll();
     $scope.cleanForm();
        $timeout(function () {
          file.result = response.data;
        });
      }, function (response) {
        //if (response.status > 0)
          //$scope.errorMsg = response.status + ': ' + response.data;
      }, function (evt) {

        // Math.min is to fix IE which reports 200% sometimes
        //file.progress = Math.min(100, parseInt(100.0 * evt.loaded / evt.total));
      });


   closeModal();
   setTimeout( "jQuery('#wait').hide();", 1000 );

    }
    $scope.getAll = function(){
      $http.get("php/lerAnimais.php").success(function(response){
          $scope.idAnimal = response.records;
      });
  }
  // delete product
  $scope.atualizarAnimal = function(id){

    $http.post('php/atualizarAnimal.php', {
        'id' : id,
        'nomeAnimal' : $scope.nomeAnimal1,
        'descricao' : $scope.descricao1

    })
    .success(function (data, status, headers, config){

        $scope.getAll();
    });
}
$scope.deletarAnimal = function(id){

  swal({   title: "Você tem certeza?",
           text: "Este animal será excluido permanentemente!",
           type: "warning",   showCancelButton: true,
           confirmButtonColor: "#DD6B55",
           confirmButtonText: "Sim!",
           cancelButtonText: "Cancelar",
           closeOnConfirm: false,
           closeOnCancel: false },
           function(isConfirm){
           if (isConfirm) {
            // if(confirm("Are you sure?")){
   // post the id of product to be deleted
               $http.post('php/removerAnimais.php', {
                   'id' : id
               }).success(function (data, status, headers, config){

                   swal("Deletado!", "O Animal foi removido.", "success");
                   $scope.getAll();
               });
            //}
                  s

                }
                   else {
                          swal("Cancelado", "O animal não foi removido.", "error");   }
                         }
                       );
}
  }]);
    </script>

  </head>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <body>



      <title>Adote hoje!</title>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="padding-top:23px;" href="#">Adote hoje!</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="home.html" style="padding-top:23px;">Home</a></li>
            <li><a href="#" style="padding-top:23px;">Contato</a></li>

          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <select class="form-control" style="width: 200px " id = "animalSelect">
                      <option data-image="Imagens/Icones/Paw-25.png">Todos</option>
                      <option data-image="Imagens/Icones/Dog-25.png">Cães</option>
                      <option  data-image="Imagens/Icones/Cat-25.png">Gatos </option>

              </select>
            </div>
            <button type="submit" class="btn btn-default">Enviar</button>
            <a href="" style="margin-left: 20px;"><img src="Imagens/Icones/Settings-25.png"></a>

          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text" style="">Deseja logar ou criar uma conta?</p></li>
            <li class="dropdown">
              <a href="#" style="padding-top:23px;" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
    			<ul id="login-dp" class="dropdown-menu">
    				<li>
    					 <div class="row">
    							<div class="col-md-12">
    								Login via
    								<div class="social-buttons">
    									<a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
    									<a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
    								</div>
                                    ou
    								 <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
    										<div class="form-group">
    											 <label class="sr-only" for="exampleInputEmail2">Endereço de e-mail</label>
    											 <input type="email" class="form-control" id="exampleInputEmail2" placeholder="E-mail" required>
    										</div>
    										<div class="form-group">
    											 <label class="sr-only" for="exampleInputPassword2">Senha</label>
    											 <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Senha" required>
                                                 <div class="help-block text-right"><a href="">Esqueceu a senha?</a></div>
    										</div>
    										<div class="form-group">
    											 <button type="submit" class="btn btn-primary btn-block">Entrar</button>
    										</div>
    										<div class="checkbox">
    											 <label>
    											 <input type="checkbox"> Mantenha-me logado
    											 </label>
    										</div>
    								 </form>
    							</div>
    							<div class="bottom text-center">
    								Novo aqui? <a href="#"><b>Junte-se a nós!</b></a>
    							</div>
    					 </div>
    				</li>
    			</ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!--<script src="js/crud.js"></script> -->
    >

    <link rel='stylesheet prefetch' href='css/bootstrap2.3.1.css'>
    <link rel="stylesheet" href="css/style.css"/>
  <link rel="stylesheet" type="text/css" href="css/editarDiv.css" />
      <link rel="stylesheet" type="text/css" href="css/fancy.css" />
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>




    <link rel="stylesheet" type="text/css" href="css/dd.css" />

    <!-- fim da navbar-->
    <!-- comeco do form -->


    <div class="container-fluid1">
    <div class="row-fluid">
    <div class="span12">
      <ul class="nav nav-tabs">

      <li class="active"><a data-toggle="tab" href="#menu1">Animais Cadastrados</a></li>

    </ul>
    <br>
  <div ng-app="app" ng-controller="animalsCtrl">
  <div id="modal_wrapper">
  <div id="modal_window" >

  <div style="text-align: right;"><a id="modal_close" href="#">close <b>X</b></a></div>

    <form  id="modal_feedback" name="modal_feedback" novalidate ng-submit="modal_feedback.$valid && modal_feedback.submit()" method="post"  action="insertAnimais.php" enctype="multipart/form-data" width ="80px" height="100px">

      <fieldset class="form-group">
        <label for="exampleInputFile">Imagem do Animal</label>
        <input type="file" ngf-select ng-model="file" class="form-control-file" onchange="loadFile(event)" name="file" id="file">
        <div id ="outputdiv"><img id = "output" width="360px" height="240px"/> </div>
      </fieldset>
    <fieldset class="form-group">
        <label for="exampleSelect1">Estado</label>
        <select class="form-control" ng-model="estado" name="estado" id="estado" required="true">

        </select>
        <span id="noStateSupplied" ng-show="(modal_feedback.estado.$touched && modal_feedback.estado.$invalid) || (submitted && modal_feedback.estado.$error.required)"> <font color='red'> * Você precisa informar o estado que o animal se encontra!</font></label>
      </fieldset>
      <fieldset class="form-group">
        <label for="exampleSelect1">Cidade</label>
        <select class="form-control"  ng-model="cidade" name="cidade" id="cidade" required="true">

        </select>
        <span id="noCitySupplied" ng-show="modal_feedback.cidade.$touched && modal_feedback.cidade.$invalid"> <font color='red'> * Você precisa informar a cidade que o animal se encontra!</font></label>
      </fieldset>

      <fieldset class="form-group">
        <label>Endereço</label>
        <input type="" class="form-control"ng-model="endereco" id="endereco" name="endereco" placeholder="Endereço" required="true">
        <span id="noAddressSupplied" ng-show="modal_feedback.endereco.$touched && modal_feedback.endereco.$invalid"> <font color='red'> * Você precisa fornecer um endereço!</font></label>
      </fieldset>
      <fieldset class="form-group">
        <label >Se o animal possuir um nome, digite-o no campo abaixo</label>
        <input type="" class="form-control" ng-model="nomeAnimal" id="nomeAnimal" name="nomeAnimal" placeholder="Sem Nome">
      </fieldset>
      <fieldset class="form-group">
        <label for="exampleSelect1">O animal é um</label>
        <select class="form-control" ng-model="tipoAnimal" name="tipoAnimal" id="animalSelectCadastro">
          <option value="Cão" data-image="Imagens/Icones/Dog-25.png">Cão</option>
          <option  value="Gato" data-image="Imagens/Icones/Cat-25.png">Gato </option>
        </select>
      </fieldset>
      <fieldset class="form-group">
        <label for="exampleTextarea">Descreva o animal:</label>
        <textarea class="form-control" ng-model="descricao" name="descricao" id="descricao" rows="3" required="true"></textarea>
        <span id="noDescriptionSupplied" ng-show="modal_feedback.descricao.$touched && modal_feedback.descricao.$invalid"> <font color='red'> Você precisa fornecer uma descrição sobre o animal!</font> </label>
      </fieldset>

      <div class="radio" ng-model="sexo">
        <label>
          <input type="radio" id="optionsRadios1" name="sexo" value="Fêmea" checked>
          Fêmea <img src="Imagens/Icones/Femea-25.png">
        </label>
      </div>
      <div class="radio" ng-model="sexo">
        <label>
          <input type="radio" id="optionsRadios2" name="sexo" value="Macho">
          Macho <img src="Imagens/Icones/Macho-25.png">
        </label>
      </div>

      <button type="button" ng-click="createAnimal(file)"  ng-disabled="modal_feedback.$invalid" name="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>
  </div>




  <div id="menu1">
      <button type="button"  id="modal_open" class="btn btn-success btn-lg">Cadastrar novo animal</button> <!-- id="modal_open"-->
      <div class="container-fluid1">

  <div class="row-fluid">
  <div class="span12">
      <div class="carousel slide" id="myCarousel">
          <div class="carousel-inner">

              <div id="carousel" ng-init="getAll()"  class="item active">
                    <li  ng-repeat="d in idAnimal" class="span3">
                      <div class="thumbnail">
                      <a href="#"><img width="360" height="240"src="Imagens/Animais/{{d.caminhoImagem}}"   alt=""></a>
                      <div class="caption" width="360" height="240">
                        <div  id="name" class="resultContainer" style="width: 100%; overflow: hidden;"> <div  class="textBoxContainer" ng-model="nomeAnimal1" name="nomeAnimal1"style ="float: left; width:200px;"contentEditable="true">   <h4>{{d.nomeAnimal}}</h4></div>  <div class="viewThisResult" style="marginLeft:20px;"contentEditable="false"><img data-ng-click="atualizarAnimal(d.id)" style="cursor: pointer;" src="Imagens/Icones/save-12.png" style="
  margin: 5px;"></div></div>
                    <div  id="description2" class="resultContainer" style="width: 100%; overflow: hidden;"> <div  class="textBoxContainer" id="descricao1" name="descricao1" ng-model="descricao1" style ="float: left; width:200px;"contentEditable="true">     <p>{{d.descricao}}</p></div> <div class="viewThisResult" style="marginLeft:20px;"contentEditable="false"><img data-ng-click="atualizarAnimal(d.id)" style="cursor: pointer;"src="Imagens/Icones/save-12.png" style="
  margin: 5px;"></div></div>
        <button type="submit" name="remover" ng-click="deletarAnimal(d.id)" class="btn btn-danger btn-mini" >&raquo; REMOVER</a>
                    </li>
                    </div>

                </div>
                <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='Imagens/Icones/loadingcat.gif' width="64" height="64" /><br>Carregando..</div>
              </div>
            </div>
          </div>
        </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>

    <script type="text/javascript" src="js/cidades-estados.js"></script>
    <script type="text/javascript">
    window.onload = function() {

      cidadeEstado = new dgCidadesEstados({
        estado: document.getElementById('estado'),
        cidade: document.getElementById('cidade'),
         estadoVal: '<%=Request("estado") %>',
         cidadeVal: '<%=Request("cidade") %>'
      });

    }



    </script>
    <script language="javascript">
    $(document).ready(function(e) {
    try {
    $('#animalSelect').msDropDown();
    } catch(e) {
    alert(e.message);
    }
    try {
    $('#animalSelectCadastro').msDropDown();
    } catch(e) {
    alert(e.message);
    }
    });
    </script>
    <style type="text/css">

    #modal_wrapper.overlay:before {
      content: " ";
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 100;
      top: 0;
      left: 0;
      background: #000;
      background: rgba(0,0,0,0.7);
    }

    #modal_window {
      display: none;
      z-index: 200;
      position: absolute;
      left: 50%;
      top: 50%;
      width: 360px;
      overflow: auto;
      padding: 10px 20px;
      background: #fff;
      border: 5px solid #999;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
    }

    #modal_wrapper.overlay #modal_window {
      display: block;
    }

    </style>
    <script>
  $(document).ready(function(){
      $(document).ajaxStart(function(){
          $("#wait").css("display", "block");
      });
      $(document).ajaxComplete(function(){
          setTimeout( "jQuery('#wait').hide();", 1000 );
      });

  });
  $('#name').on('keydown', function(e) {
    if (e.which == 13) {
      //Prevent insertion of a return
      //You could do other things here, for example
      //focus on the next field
      return false;
    }
  });
  </script>
    <!-- fim do form -->
