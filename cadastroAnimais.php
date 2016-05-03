
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

      var closeModal = function(e)
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
      //  console.log("ola");
        //document.addEventListener("click", clickHandler, false);
        //document.addEventListener("keydown", keyHandler, false);
      } else {
       document.getElementById("modal_open").attachEvent("onclick", openModal);
        document.getElementById("modal_close").attachEvent("onclick", closeModal);
        //document.attachEvent("onclick", clickHandler);
        //document.attachEvent("onkeydown", keyHandler);
      }

    };

  </script>


<script>

var loadFile = function(event) {

output = document.getElementById('output');
output.src = URL.createObjectURL(event.target.files[0]);
//output.width = "360px";
//output.height = "240px";
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
  <script src="js/crud.js"></script>
  <script src="js/index.js"></script>
    <script src="js/jsmin2.0.js"></script>
    <script src="js/bootstrap.min.js"></script>

  <script src="js/jquery.dd.min.js"></script>


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

<div id="modal_wrapper">
<div id="modal_window">

<div style="text-align: right;"><a id="modal_close" href="#">close <b>X</b></a></div>
  <form  id="modal_feedback" method="post"  action="insertAnimais.php" enctype="multipart/form-data" width ="80px" height="100px">

    <fieldset class="form-group">
      <label for="exampleInputFile">Imagem do Animal</label>
      <input type="file" class="form-control-file" onchange="loadFile(event)" name="file" id="file">
      <div id ="outputdiv"><img id = "output" width="360px" height="240px"/> </div>
    </fieldset>
  <fieldset class="form-group">
      <label for="exampleSelect1">Estado</label>
      <select class="form-control" name="estado" id="estado">

      </select>
      <label id="noStateSupplied"> </label>
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleSelect1">Cidade</label>
      <select class="form-control" name="cidade" id="cidade">

      </select>
      <label id="noCitySupplied"> </label>
    </fieldset>

    <fieldset class="form-group">
      <label>Endereço</label>
      <input type="" class="form-control" id="endereco" name="endereco" placeholder="Endereço">
      <label id="noAddressSupplied"> </label>
    </fieldset>
    <fieldset class="form-group">
      <label >Se o animal possuir um nome, digite-o no campo abaixo</label>
      <input type="" class="form-control" id="nomeAnimal" name="nomeAnimal" placeholder="Sem Nome">
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleSelect1">O animal é um</label>
      <select class="form-control" name="tipoAnimal" id="animalSelectCadastro">
        <option value="Cão" data-image="Imagens/Icones/Dog-25.png">Cão</option>
        <option  value="Gato" data-image="Imagens/Icones/Cat-25.png">Gato </option>
      </select>
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleTextarea">Descreva o animal:</label>
      <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
      <label id="noDescriptionSupplied"> </label>
    </fieldset>

    <div class="radio">
      <label>
        <input type="radio" id="optionsRadios1" name="sexo" value="Fêmea" checked>
        Fêmea <img src="Imagens/Icones/Femea-25.png">
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" id="optionsRadios2" name="sexo" value="Macho">
        Macho <img src="Imagens/Icones/Macho-25.png">
      </label>
    </div>

    <button type="button" onclick="add();" name="submit" class="btn btn-primary">Cadastrar</button>
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

            <div id="carousel" class="item active">
              <?php
              $con = mysqli_connect("localhost","root","","projetorenzo");
              $sql = "SELECT* FROM ANIMAIS ORDER BY ID DESC";
              $result = $con->query($sql);
              define('COLS', 4); // number of columns
              $col = 0; // number of the last column filled
              if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                      $col++;
                      echo '<li id = "'.$row['id'].'"class="span3">
                          <div class="thumbnail">

                          <a href="#"><img width="360" height="240"src="Imagens/Animais/'.$row['caminhoImagem'].'" alt=""></a>
                          <div class="caption" width="360" height="240">
                          <div  id="name" class="resultContainer" style="width: 100%; overflow: hidden;"> <div id="nameEdited" class="textBoxContainer" style ="float: left; width:200px;"contentEditable="true">   <h4>'.$row['Nome'].'</h4></div>  <div class="viewThisResult" style="marginLeft:20px;"contentEditable="false"><img src="Imagens/Icones/Edit-12.png" style="
    margin: 5px;"></div></div>
                  <div  id="description2" class="resultContainer" style="width: 100%; overflow: hidden;"> <div id="descriptionEdited" class="textBoxContainer" style ="float: left; width:200px;"contentEditable="true">     <p>'.$row['Descricao'].'</p></div> <div class="viewThisResult" style="marginLeft:20px;"contentEditable="false"><img src="Imagens/Icones/Edit-12.png" style="
margin: 5px;"></div></div>

                              <button type="submit" name="remover" onclick="apagar('.$row['id'].')" class="btn btn-danger btn-mini" >&raquo; REMOVER</a>
                          </div>
                            </div>
                      </li>';
                      if($col == COLS){
                        $col = 0;
                        echo '</ul>';
                      }
                  }
              } else {
                //  echo "0 results";
                }
                    ?>
                  </div>
                </div>
              </div>
              <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='Imagens/Icones/loadingcat.gif' width="64" height="64" /><br>Carregando..</div>
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
