<?php 
include "config.php";
include "antisql.php";
if (count($_POST) > 0) {
  $nome = antisql($conexao,$_POST["cadnome"]);
  $login = antisql($conexao,$_POST["cadlogin"]);
  $senha = sha1($_POST["cadsenha"]);
  $confirmasenha = sha1($_POST["cadconfirma"]);

  if ($senha == $confirmasenha) {  
  $sqlConsulta = "SELECT login FROM usuarios WHERE login = '$login'";
  $sqlSelect = mysqli_query($conexao,$sqlConsulta);

  if (mysqli_num_rows($sqlSelect) == 0) {
  $sql = "INSERT INTO usuarios(nome,login,senha,foto) VALUES('$nome','$login','$senha','user.jpg')";
  $sqlInsert = mysqli_query($conexao,$sql);
  echo "
     <script>
      alert('Usuário cadastrado com sucesso');
     </script>
  ";
}
else{
  echo "
     <script>
      alert('Login em uso');
     </script>
  ";
    }
  }
  else{
    echo "
      <script>
        alert('A senha não confere');
      </script>
    ";
  }
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-yellow.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="shortcut icon" href="images/ico.png">
</head>
<body>
<!-- Simple header with fixed tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title" style="color: #FFF;">Biblioteca
</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active" style="color: #FFF;">Login</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab" style="color: #FFF;">Cadastro</a>
    </div>
  </header>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content" style="margin: 5% 40%">
      	<form action="logar.php" method="post">
		  	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" name="login" id="login">
		    <label class="mdl-textfield__label" for="login">Login</label>
		  	</div>
			<br><br>
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="password" name="senha" id="senha">
		    <label class="mdl-textfield__label" for="senha">Senha</label>
		  	</div>
			<br><br>
			<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="submit" value="Efetuar Login" style="color: #FFF;"/>&nbsp;&nbsp;<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="reset" value="Cancelar" style="color: #666;"/>
		</form>
      </div>
    </section>
    <section class="mdl-layout__tab-panel" id="fixed-tab-2">
      <div class="page-content" style="margin: 5% 40%">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="cadnome" id="nome">
        <label class="mdl-textfield__label" for="nome">Nome</label>
        </div>
      <br><br>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" name="cadlogin" id="login">
        <label class="mdl-textfield__label" for="login">Login</label>
        </div>
      <br><br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" name="cadsenha" id="senha">
        <label class="mdl-textfield__label" for="senha">Senha</label>
        </div>
      <br><br>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="password" name="cadconfirma" id="confirma">
        <label class="mdl-textfield__label" for="confirma">Confirmar Senha</label>
        </div>
      <br><br>
      <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="submit" value="Cadastrar" style="color: #FFF;"/>&nbsp;&nbsp;<input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="reset" value="Cancelar" style="color: #666;"/>
    </form>
      </div>
    </section>
  </main>
</div>

</body>
</html>