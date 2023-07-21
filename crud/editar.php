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
    $especie = $um_registro["especie"];
    $nome = $um_registro["nome"];
    $sexo = $um_registro["sexo"];
    $tamanho = $um_registro["tamanho"];
    $idade = $um_registro["idade"];
    $cidade = $um_registro["cidade"];
    $estado = $um_registro["estado"];
    $sobre_pet = $um_registro["sobre_pet"];
    $foto = $um_registro["foto"];
endwhile
?>

<main class="container-fluid fonte-tema">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb ms-5 pt-4 fonte-tema">
            <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a class="cor-breadcrumb" href="../paginas-ong/pets-cadastrados-ong.php">Pets Cadastrados</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar</li>
        </ol>
    </nav>
    <div class="row pt-5 ms-3">
        <div class="col-12">
            <h1>Editar Pet 🐾</h1>
        </div>
    </div>
    <form class="fonte-tema p-5" method="post" action="atualizar.php?id=<?php echo $id; ?>">
        <div class="row mb-3">
            <div class="col-4">
                <label class="form-label" for="especie">Especie</label>
                <select class="form-select" name="especie" id="especie">
                    <option value="<?php echo $especie ?>"><?php echo $especie ?></option>
                    <option value="Cachorro">Cachorro</option>
                    <option value="Gato">Gato</option>
                </select>
            </div>
            <div class="col">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $nome ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="sexo">Sexo:</label>
                <select class="form-select" name="sexo" id="sexo">
                    <option value="<?php echo $sexo ?>"><?php echo $sexo ?></option>
                    <option value="Macho">Macho</option>
                    <option value="Femêa">Femêa</option>
                </select>
            </div>
            <div class="col">
                <label class="form-label" for="tamanho">Tamanho:</label>
                <select class="form-select" name="tamanho" id="tamanho">
                    <option value="<?php echo $tamanho ?>"><?php echo $tamanho ?></option>
                    <option value="Pequeno">Pequeno</option>
                    <option value="Médio">Médio</option>
                    <option value="Grande">Grande</option>
                </select>
            </div>
            <div class="col">
                <label class="form-label" for="idade">Idade:</label>
                <input class="form-control" type="text" name="idade" id="idade" value="<?php echo $idade ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="cidade">Cidade:</label>
                <select class="form-select" name="cidade" id="cidade">
                    <option value="<?php echo $cidade ?>"><?php echo $cidade ?></option>
                    <option value="Americana">Americana</option>
                    <option value="Santa Barbara D'Oeste">Santa Barbara D'Oeste</option>
                    <option value="Nova Odessa">Nova Odessa</option>
                    <option value="Sumare">Sumaré</option>
                    <option value="Limeira">Limeira</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label" for="estado">Estado:</label>
                <select class="form-select" name="estado" id="estao">
                    <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="sobre_pet">Sobre o pet</label>
                <input class="form-control" type="text" name="sobre_pet" id="sobre_pet" value="<?php echo $sobre_pet ?>">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="foto">Foto:</label>
                <input class="form-control" type="file" name="foto" id="foto" value="<?php echo $foto ?>">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col text-center">
                <button class="cor-btn-blocopets">ALTERAR</button>
            </div>
        </div>
    </form>
</main>

<?php
mysqli_close($conexao);
include "../inc/rodape.php";
?>