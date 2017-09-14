<?php
include "config.php";
include "antisql.php";
$nome = antisql($conexao,$_POST["nome"]);
$tel = antisql($conexao,$_POST["tel"]);
$email = antisql($conexao,$_POST["email"]);
$sql = "INSERT INTO leitor VALUES(0,'$nome','$tel','$email')";
$sqlInsert = mysqli_query($conexao,$sql);

?>
<script type="text/javascript">
  alert("Novo usuário cadastrado!");
</script>
  <link rel="shortcut icon" href="images/ico.png">
<meta charset="utf-8">
<meta http-equiv="refresh" content="0,url=dashboard.php">;