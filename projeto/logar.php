<?php 
session_start();
include "config.php";
include "antisql.php";
$login = antisql($conexao,$_POST["login"]);
$senha = sha1($_POST["senha"]);

$sqlConsulta = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
  $sqlSelect = mysqli_query($conexao,$sqlConsulta);

if (mysqli_num_rows($sqlSelect) == 1){
	$_SESSION["login"] = $login;
	$_SESSION["senha"] = $senha;
	header("Location:dashboard.php");
}
else{
	unset($_SESSION["login"]);
	unset($_SESSION["senha"]);
	echo "
		<script>
			alert('Usuário e/ou senha incorretos');
		</script>
		<meta http-equiv=refresh content='0; url=index.php'>
	";
}
?>