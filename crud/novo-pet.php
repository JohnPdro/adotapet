<?php 
include "../inc/conexao.php";

$especie = $_POST["especie"];
$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$tamanho = $_POST["tamanho"];
$idade = $_POST["idade"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$sobre_pet = $_POST["sobre_pet"];   


$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);

$sql = "insert into animais(especie, nome, sexo, tamanho, idade, cidade, estado, sobre_pet, foto) values('$especie', '$nome', '$sexo', '$tamanho', '$idade', '$cidade', '$estado', '$sobre_pet', '$target_file')";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../paginas-ong/pets-cadastrados-ong.php");

?>