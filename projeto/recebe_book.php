<?php
include "config.php";
include "antisql.php";
$nome = antisql($conexao,$_POST["nome"]);
$editora = antisql($conexao,$_POST["editora"]);
$autor = antisql($conexao,$_POST["autor"]);
$sql = "INSERT INTO livro VALUES (0,'$nome','$editora','$autor')";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Livro cadastrado com sucesso!");
</script>
  <link rel="shortcut icon" href="images/ico.png">
<meta charset="utf-8">
<meta http-equiv="refresh" content="0,url=dashboard.php">;