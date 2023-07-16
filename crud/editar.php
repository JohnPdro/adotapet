<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";

$id = $_GET["id"];
$especie = "";
$nome = "";
$sexo = "";
$tamanho = "";
$idade = "";
$cidade = "";
$estado = "";
$sobre_pet = "";
$foto = "";

$sql = "select * from animais where codigo = $id";
$todos_registros = mysqli_query($conexao, $sql);
while ($um_registro = mysqli_query($conexao, $sql)) :
    $especie = $um_registro["especie"];
    $nome = $um_registro["nome"];
    $sexo = $um_registro["sexo"];
    $tamanho = $um_registro["tamnaho"];
    $idade = $um_registro["idade"];
    $cidade = $um_registro["cidade"];
    $estado = $um_registro["estado"];
    $sobre_pet = $um_registro["sobre_pet"];
    $foto = $um_registro["sobre_pet"];
endwhile
?>

<?php
include "../inc/rodape.php";
?>