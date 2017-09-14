<?php
//Criando a função que recebe a conexao do BD e a var string, que recebe as funções para cortar barras e aspas chamar essa função antes do include
function antisql($conexao,$string){
	//condição  ternária if de uma linha dps do interrogação é se verdadeiro após o : é se falso     
	// se tiver ligado o getmagicquotes ele tira a contrabarra
	$string = get_magic_quotes_gpc() ? stripslashes($string) : $string;
	//remove qualquer comando sql
	$string = mysqli_real_escape_string($conexao,$string);
	return $string;

}
?>