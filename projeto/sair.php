<?php
/* Dessa forma era possivel clicar no avançar no navegador e então ganhar um novo acesso de admin sem se conectar
session_start();
session_destroy();
header("Location: index.php");
*/
session_start();
unset($_SESSION["login"]);
unset($_SESSION["senha"]);

    
?>
<meta http-equiv=refresh content='0; url=index.php'>