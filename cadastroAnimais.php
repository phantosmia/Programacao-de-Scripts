<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<body>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
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
        <li class="active"><a href="#" style="padding-top:23px;">Home</a></li>
        <li><a href="#" style="padding-top:23px;">Contato</a></li>
      <!--  <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
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
<script src="js/index.js"></script>
  <script src="js/jsmin2.0.js"></script>
  <script src="js/bootstrap.min.js"></script>

<script src="js/jquery.dd.min.js"></script>


<link rel='stylesheet prefetch' href='css/bootstrap2.3.1.css'>
<link rel="stylesheet" href="css/style.css"/>

  <link rel="stylesheet" type="text/css" href="css/fancy.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>




<link rel="stylesheet" type="text/css" href="css/dd.css" />

<!-- fim da navbar-->
<!-- comeco do form -->
<div class="container-fluid1">
<div class="row-fluid">
<div class="span12">
<form action="cadastroAnimais.php" method="post" width ="80px" height="100px" enctype="multipart/form-data">
  <fieldset class="form-group">
    <label for="exampleInputFile">Imagem do Animal</label>
    <input type="file" class="form-control-file" onchange="loadFile(event)" name="file" id="exampleInputFile">
    <img id = "output" width="360px" height="240px"/>
  </fieldset>
<fieldset class="form-group">
    <label for="exampleSelect1">Estado</label>
    <select class="form-control" id="estado">

    </select>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleSelect1">Cidade</label>
    <select class="form-control" id="cidade">

    </select>
  </fieldset>

  <fieldset class="form-group">
    <label>Endereço</label>
    <input type="" class="form-control" placeholder="Endereço">
  </fieldset>
  <fieldset class="form-group">
    <label >Se o animal possuir um nome, digite-o no campo abaixo</label>
    <input type="" class="form-control" placeholder="Sem Nome">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleSelect1">O animal é um</label>
    <select class="form-control" id="animalSelectCadastro">
      <option data-image="Imagens/Icones/Dog-25.png">Cão</option>
      <option  data-image="Imagens/Icones/Cat-25.png">Gato </option>
    </select>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleTextarea">Descreva o animal:</label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  </fieldset>

  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
      Fêmea <img src="Imagens/Icones/Femea-25.png"
    </label>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Macho <img src="Imagens/Icones/Macho-25.png">
    </label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
</form>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
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
<script type="text/javascript" src="js/cidades-estados.js"></script>
<script type="text/javascript">
window.onload = function() {

  new dgCidadesEstados({
    estado: document.getElementById('estado'),
    cidade: document.getElementById('cidade'),
     estadoVal: '<%=Request("estado") %>',
     cidadeVal: '<%=Request("cidade") %>'
  });
}
</script>
<!-- fim do form -->


<?php
$con = mysqli_connect("localhost","root","","projetorenzo");
if(!$con)
  die(mysql_error());
else{
  if(isset($_POST['submit']))
  {
    $name=$_FILES['file']['name'];
    $type=$_FILES['file']['type'];
    if($type=='image/jpeg' || $type=='image/png' || $type=='image/gif' || $type=='image/pjpeg')
    {


       $up=move_uploaded_file($_FILES['file']['tmp_name'],'Imagens/Animais/'.$name);
       $q=mysqli_query($con,"insert into animais (caminhoImagem, Estado, Cidade, Endereco, Nome, Tipo, Descricao, Sexo) values('".$name."','t','t','t','t','t','t','t')");
   if($up && $q)
   {
    echo'image uploaded and stored';
   }
   elseif(!$up)
   {
    echo'image not uploaded';
   }
   elseif(!$q)
   {
  echo("Error description: " . mysqli_error($con));
   }
  }

    else
    {
     echo'Invalid file type';
    }
  }
}
?>
