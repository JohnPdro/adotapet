<?php 
include"../inc/conexao.php";

$especie = $_POST["especie"];
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$tamanho = $_POST["tamanho"];
$idade = $_POST["idade"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$sobre_pet = $_POST["sobre_pet"];
$foto = $_POST["foto"];

$sql = "insert into animais(especie, nome, sexo, tamanho, idade, cidade, estado, sobre_pet, foto) values('$especie', '$nome', '$sexo', '$tamanho', '$idade', '$cidade', '$estado', '$sobre_pet', '$foto')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../paginas-ong/pets-cadastrados-ong.php");

?>