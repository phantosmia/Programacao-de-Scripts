<?php

$con = mysqli_connect("localhost","root","","projetorenzo");
$sql = "SELECT* FROM ANIMAIS ORDER BY ID DESC LIMIT 1";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $id_imagem = $row['id']+1;
    }
} else {
    echo "0 results";
  }
if(!$con)
  die(mysql_error());
else{
  if(isset($_POST['remover'])){
    $sql = "DELETE FROM animais WHERE id=".$_GET["animalRemover"]."";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}
  }
  if(isset($_POST['submit']))
  {
    if($_POST['nomeAnimal'] == "")
      $_POST['nomeAnimal'] = "Sem nome";
    $name=$_FILES['file']['name'];
    $type=$_FILES['file']['type'];
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = $id_imagem .$_POST['nomeAnimal'] . '.' . end($temp);

    if($type=='image/jpeg' || $type=='image/png' || $type=='image/gif' || $type=='image/pjpeg')
    {
       $up=move_uploaded_file($_FILES['file']['tmp_name'],'Imagens/Animais/'.$newfilename);
       $q=mysqli_query($con,"insert into animais (caminhoImagem, Estado, Cidade, Endereco, Nome, Tipo, Descricao, Sexo) values('".$newfilename."','".$_POST['estado']."','".$_POST ['cidade']."','".$_POST['endereco']."','".$_POST['nomeAnimal']."','".$_POST['tipoAnimal']."','".$_POST['descricao']."','".$_POST['sexo']."')");
   if($up && $q)
   {
    header("Refresh:0");
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
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Cadastro</a></li>
    <li><a data-toggle="tab" href="#menu1">Animais Cadastrados<?php
    $con=mysqli_connect("localhost","root","","projetorenzo");
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql="SELECT * from animais";

    if ($result=mysqli_query($con,$sql))
      {
      // Return the number of rows in result set
      $rowcount=mysqli_num_rows($result);
      printf("(".$rowcount.')');
      // Free result set
      mysqli_free_result($result);
      }

    mysqli_close($con);
    ?></a></li>

  </ul>
  <br>
  <div class="tab-content">
  <div id="home" class="tab-pane fade in active">
  <form action="cadastroAnimais.php" method="post" width ="80px" height="100px" enctype="multipart/form-data">
    <fieldset class="form-group">
      <label for="exampleInputFile">Imagem do Animal</label>
      <input type="file" class="form-control-file" onchange="loadFile(event)" name="file" id="exampleInputFile">
      <img id = "output" width="360px" height="240px"/>
    </fieldset>
  <fieldset class="form-group">
      <label for="exampleSelect1">Estado</label>
      <select class="form-control" name="estado" id="estado">

      </select>
    </fieldset>
    <fieldset class="form-group">
      <label for="exampleSelect1">Cidade</label>
      <select class="form-control" name="cidade" id="cidade">

      </select>
    </fieldset>

    <fieldset class="form-group">
      <label>Endereço</label>
      <input type="" class="form-control" name="endereco" placeholder="Endereço">
    </fieldset>
    <fieldset class="form-group">
      <label >Se o animal possuir um nome, digite-o no campo abaixo</label>
      <input type="" class="form-control" name="nomeAnimal" placeholder="Sem Nome">
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
      <textarea class="form-control" name="descricao" id="exampleTextarea" rows="3"></textarea>
    </fieldset>

    <div class="radio">
      <label>
        <input type="radio" id="optionsRadios1" name="sexo" value="Fêmea" checked>
        Fêmea <img src="Imagens/Icones/Femea-25.png"
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" id="optionsRadios2" name="sexo" value="Macho">
        Macho <img src="Imagens/Icones/Macho-25.png">
      </label>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
<?php
    echo '<div id="menu1" class="tab-pane fade">
    <div class="container-fluid1">
<div class="row-fluid">
<div class="span12">
    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">';
            $con = mysqli_connect("localhost","root","","projetorenzo");
            $sql = "SELECT* FROM ANIMAIS ORDER BY ID DESC";
            $result = $con->query($sql);
            define('COLS', 4); // number of columns
            $col = 0; // number of the last column filled
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $col++;
                    echo '<li class="span3">
                        <div class="thumbnail">

                        <a href="#"><img width="360" height="240"src="Imagens/Animais/'.$row['caminhoImagem'].'" alt=""></a>
                        <div class="caption" width="360" height="240">
                            <h4>'.$row['Nome'].'</h4>
                    <p>'.$row['Descricao'].'</p>
                    <form method="post" action="cadastroAnimais.php?animalRemover='.$row['id'].'" enctype="multipart/form-data" method="get">
                            <button type="submit" name="remover" class="btn btn-danger btn-mini" >&raquo; REMOVER</a>
                        </div>
                          </div>
                    </li>';
                    if($col == COLS){
                      $col = 0;
                      echo '</ul>';
                    }
                }
            } else {
                echo "0 results";
              }
        ?>
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

    cidadeEstado = new dgCidadesEstados({
      estado: document.getElementById('estado'),
      cidade: document.getElementById('cidade'),
       estadoVal: '<%=Request("estado") %>',
       cidadeVal: '<%=Request("cidade") %>'
    });

  }



  </script>
  <!-- fim do form -->
