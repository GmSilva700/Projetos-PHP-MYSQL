<?php
include "config.php";

?>
<html>
<head>
    <title>Biblioteca</title>
    <meta charset="utf-8">
    <link href="//cdn.muicss.com/mui-0.9.20/css/mui.min.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-0.9.20/js/mui.min.js"></script>
     <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">
     <link rel="shortcut icon" href="images/ico.png">
    <!-- CSS-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-yellow.min.css" />     
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <!-- FONTE -->
        <link href="https://fonts.googleapis.com/css?family=Lateef" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <!-- Icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="css/estilo.css">
      <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet"> 
    </head>
    <body>
    <?php 
  session_start();
  include 'config.php';
  $sql = "SELECT * FROM usuarios WHERE login = '".$_SESSION['login']."'";
  $sqlExecuta = mysqli_query($conexao,$sql);
  $user = mysqli_fetch_assoc($sqlExecuta);
  ?>
  <body>
  <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"> Biblioteca do Gabriel</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="caduser.php">Cadastrar usuário(a)&nbsp;<i class="material-icons">person_add</i></a>
        <a class="mdl-navigation__link" href="cadbook.php">Cadastrar livro&nbsp;<i class="material-icons">book</i></a>
        <a class="mdl-navigation__link" href="cadaluguel.php">Fazer locação&nbsp;<i class="material-icons">shopping_cart</i></a>
        <a class="mdl-navigation__link" href="consultas.php">Consultas&nbsp;<i class="material-icons">search</i></a>
      </nav>
    </div>
   
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <a class="mdl-navigation__link" href="dashboard.php"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href="">
    <nav class="mdl-navigation">
    <img src="images/<?php echo $user['foto']; ?>" class="demo-avatar"></br>
    <i class="material-icons">sentiment_very_satisfied</i>&nbsp;<span>Olá <?php echo $user["nome"];?></span>
                <div class="mdl-layout-spacer">
          <form action="altera_fotos.php" method="post" enctype="multipart/form-data"><i class="material-icons">add_a_photo</i>Trocar foto
           <input class="mdl-textfield__input" type="file" name="arquivo" id="arquivo">
            <input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" type="submit" value="Alterar Foto" style="color: #FFF;"/>
          </form>
          </a>
          <a class="mdl-navigation__link" href="sair.php"><i class="material-icons">exit_to_app</i>Sair</a></br></br></br></br></br></br>
          </div>
          </div>
           <main class="mdl-layout__content">
    <div class="page-content"> 
    <form class="mui-form" action="recebe.php" method="post">
        <h1>Cadastrar novo usuário:</h1>
            <div class="mui-textfield"><i class="material-icons">assignment_ind</i>
             <input type="text" placeholder="Nome completo" name="nome" required>
            </div>
            <br>
            <div class="mui-textfield"><i class="material-icons">contact_phone</i>
           <input type="text" placeholder="Número" name="tel" required>
     </div>
       <br>
            <div class="mui-textfield"><i class="material-icons">contact_mail</i>
    <input type="email" placeholder="Email" name="email" required> 
  </div>
            <br>
   <button type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Limpar</button>            
  <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Enviar</button>
</form>
  </main>
</div>
</body>
</html>