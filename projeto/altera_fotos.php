<?php 
session_start();

include "config.php";
  $_UP["pasta"] = 'images/';
$_UP["tamanho"] = 1024 * 1024 * 2;
$_UP["extensoes"] = array('jpg', 'png', 'gif','jpeg');
$_UP["renomeia"] = true;
$_UP["erros"][0] = "Não houve erros";
$_UP["erros"][1] = "O arquivo no upload é maior do que o limite do PHP";
$_UP["erros"][2] = "O arquivo ultrapassa o limite de tamanho especificado no HTML";
$_UP["erros"][3] = "O upload do arquivo foi feito parcialmente";
$_UP["erros"][4] = "Não foi feito o upload do arquivo";
if ($_FILES["arquivo"]["error"] != 0) {
  die("Não foi possível fazer o upload, erro: ".$_UP["erros"][$_FILES["arquivo"]["error"]]);
  exit;
}
$ext = explode('.', $_FILES["arquivo"]["name"]);
$exten = end($ext);
$extensao = strtolower($exten);
if(array_search($extensao, $_UP["extensoes"]) === false){
  echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
  exit;
}
if ($_UP["tamanho"] < $_FILES["arquivo"]["size"]) {
  echo "O arquivo enviado é muito grande, envie arquivos de até 2 MB";
  exit;
}
if ($_UP["renomeia"] == true) {
  $nome_final = time().'.jpg';
} else {
  $nome_final = $_FILES["arquivo"]["name"];
}
if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $_UP["pasta"].$nome_final)) {
    $sql = "UPDATE usuarios SET foto = '$nome_final' WHERE login = '".$_SESSION["login"]."'";
    $sqlUpdate = mysqli_query($conexao,$sql);
  echo "
      <script>
        alert('Foto atualizada com sucesso');
      </script>
  ";
} else{
  echo "Não foi possível enviar o arquivo, tente novamente";
}
header("Location:dashboard.php");
?>