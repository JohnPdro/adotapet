<?php
include "../inc/conexao.php";

$id = $_GET["id"];

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

$sql = "update animais set especie = '$especie', nome = '$nome', sexo = '$sexo', tamanho = '$tamanho', idade = '$idade', cidade = '$cidade', estado = '$estado', sobre_pet = '$sobre_pet', foto = '$target_file' where id_animal = $id";

mysqli_query($conexao, $sql);
mysqli_close($conexao);

header("location: ../paginas-ong/pets-cadastrados-ong.php");
?>