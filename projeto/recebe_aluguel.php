<?php
include "config.php";
include "antisql.php";
session_start();
$aluLivro = antisql($conexao,$_POST["txtlivro"]);
$aluLeitor = antisql($conexao,$_POST["txtleitor"]);
$data = date('Y-m-d H:i:s');
$sql = "INSERT INTO emprestimo VALUES (0,'$aluLeitor','$aluLivro','$data')";
$sqlInsert = mysqli_query($conexao,$sql);
?>
<script type="text/javascript">
  alert("Aluguel efetuado com sucesso!");
</script>
  <link rel="shortcut icon" href="images/ico.png">
<meta charset="utf-8">
<meta http-equiv="refresh" content="0,url=dashboard.php">;