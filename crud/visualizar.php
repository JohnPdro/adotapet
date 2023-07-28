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
<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ms-5 pt-4 fonte-tema">
    <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a class="cor-breadcrumb" href="../paginas-ong/pets-cadastrados-ong.php">Pets Cadastrados</a></li>
    <li class="breadcrumb-item active" aria-current="page">Visualizar</li>
  </ol>
</nav>
<h1 class="mt-5 ms-5 fonte-tema">Ficha do Pet</h1>
<div class="container-fluid">
    <div class="card p-3 m-auto mb-5 fonte-titulo-home" style="width: 40rem;">
        <img src="<?php echo $foto; ?>" class="card-img-top" alt="Foto do animal">
        <div class="card-body">
            <h4 class="card-title fs-3 fonte-tema">Nome: <?php echo $nome; ?></h4>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col-6">
                    <p class="card-text fs-5">Especie: <?php echo $especie ?></p>
                </div>
                <div class="col-6">
                    <p class="card-text fs-5">Sexo: <?php echo $sexo; ?></p>
                </div>
            </div>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col-6">
                    <p class="card-text fs-5">Tamanho: <?php echo $tamanho; ?></p>
                </div>
                <div class="col-6">
                    <p class="card-text fs-5">Idade: <?php echo $idade; ?></p>
                </div>
            </div>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col-6">
                    <p class="card-text fs-5">Cidade: <?php echo $cidade; ?></p>
                </div>
                <div class="col-6">
                    <p class="card-text fs-5">Estado: <?php echo $estado; ?></p>
                </div>
            </div>
            <div class="row mt-3 mb-3 fonte-tema">
                <div class="col">
                    <p class="m-auto card-text fs-5">Sobre o pet: <br> <?php echo $sobre_pet; ?></p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-6">
                    <a href="../paginas-ong/pets-cadastrados-ong.php" class="mt-5 ps-5 pe-5 cor-btn-blocopets">VOLTAR</a>
                </div>
                <div class="col-6">
                    <a href="../crud/editar.php?id=<?php echo $id; ?>" class="mt-5 ps-5 pe-5 cor-btn-blocopets">EDITAR</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../inc/rodape.php";
?>