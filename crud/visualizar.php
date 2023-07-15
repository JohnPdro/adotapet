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

$sql = "select * from animais where id_animal = $id";
$todos_registros = mysqli_query($conexao, $sql);
while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
    $especie = $um_registro['especie'];
    $nome = $um_registro['nome'];
    $sexo = $um_registro['sexo'];
    $tamanho = $um_registro['tamanho'];
    $idade = $um_registro['idade'];
    $cidade = $um_registro['cidade'];
    $estado = $um_registro['estado'];
    $sobre_pet = $um_registro['sobre_pet'];
    $foto = $um_registro['foto'];
endwhile
?>

<h1 class="mt-5 ms-5 fonte-titulo-home">Ficha do Pet</h1>
<div class="container-fluid">
    <div class="card p-3 m-auto mb-5 fonte-titulo-home" style="width: 40rem;">
        <img src="<?php echo $foto; ?>" class="card-img-top" alt="Foto do animal">
        <div class="card-body">
            <h4 class="card-title">Nome: <?php echo $nome; ?></h4>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col-6">
                    <p class="card-text">Especie: <?php echo $especie ?></p>
                </div>
                <div class="col-6">
                    <p class="card-text">Sexo: <?php echo $sexo; ?></p>
                </div>
            </div>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col-6">
                    <p class="card-text">Tamanho: <?php echo $tamanho; ?></p>
                </div>
                <div class="col-6">
                    <p class="card-text">Idade: <?php echo $idade; ?></p>
                </div>
            </div>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col-6">
                    <p class="card-text">Cidade: <?php echo $cidade; ?></p>
                </div>
                <div class="col-6">
                    <p class="card-text">Estado: <?php echo $estado; ?></p>
                </div>
            </div>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col">
                    <p class="m-auto card-text">Sobre o pet: <?php echo $sobre_pet; ?></p>
                </div>
            </div>
            <a href="#" class="mt-5 cor-btn-blocopets" data-bs-toggle="modal" data-bs-target="#exampleModal">Go somewhere</a>
        </div>
    </div>
</div>

<?php
include "../inc/rodape.php";
?>