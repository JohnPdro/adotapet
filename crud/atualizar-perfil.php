<?php
include "../inc/conexao.php";

$id_ong = $_GET["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$cnpj_cpf = $_POST["cnpj_cpf"];
$senha = $_POST["senha"];

$sql = "update ongs set nome = '$nome', email = '$email', telefone = '$telefone', endereco = '$endereco', bairro = '$bairro', cidade = '$cidade', estado = '$estado', cnpj_cpf = '$cnpj_cpf', senha = '$senha' where id_ong = $id_ong";

mysqli_query($conexao, $sql);
mysqli_close($conexao);


header("location: ../paginas-ong/perfil-ong.php?email=$email");

?>