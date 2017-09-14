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
    <!-- Icones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="css/estilo.css">
      <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet"> 
    </head>
    <?php 
  session_start();
  include 'config.php';
  $sql = "SELECT * FROM usuarios WHERE login = '".$_SESSION['login']."'";
  $sqlExecuta = mysqli_query($conexao,$sql);
  $user = mysqli_fetch_assoc($sqlExecuta);
  ?>
    <body>
    <!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Biblioteca do Gabriel - Área de pesquisa<i class="material-icons">search</i></span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
      <a href="pesqlivronome.php" class="mdl-layout__tab is-active"><i class="material-icons">book</i>Nome</a>
      <a href="pesqautornome.php" class="mdl-layout__tab"><i class="material-icons">assignment_ind</i>Autor</a>
      <a href="livrogeral.php" class="mdl-layout__tab"><i class="material-icons">book</i>Geral</a>
      <a href="pesqleitornome.php" class="mdl-layout__tab"><i class="material-icons">perm_identity</i>Nome</a>
      <a href="leitorgeral.php" class="mdl-layout__tab"><i class="material-icons">perm_identity</i>Geral</a>
      <a href="checaemprestimo.php" class="mdl-layout__tab"><i class="material-icons">shopping_basket</i>Checar empréstimos</a>
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
  </div>
  <main class="mdl-layout__content">
    <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-2">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-3">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-4">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-5">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
    <section class="mdl-layout__tab-panel" id="scroll-tab-6">
      <div class="page-content"><!-- Your content goes here --></div>
    </section>
  </main>
</div>
  
   
    </body>
</html>