<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";


$id_ong = $_GET['id'];
$nome = "";
$email = "";
$telefone = "";
$endereco = "";
$bairro = "";
$cidade = "";
$estado = "";
$cnpj_cpf = "";
$senha = "";

$sql = "select * from ongs where id_ong = $id_ong";
$todos_registros = mysqli_query($conexao, $sql);
while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
    $nome = $um_registro["nome"];
    $email = $um_registro["email"];
    $telefone = $um_registro["telefone"];
    $endereco = $um_registro["endereco"];
    $bairro = $um_registro["bairro"];
    $cidade = $um_registro["cidade"];
    $estado = $um_registro["estado"];
    $cnpj_cpf = $um_registro["cnpj_cpf"];
    $senha = $um_registro["senha"];

?>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb ms-5 pt-4 fonte-tema">
        <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
        <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/perfil-ong.php">Perfil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edição de dados</li>
    </ol>
</nav>

<h1 class=" ps-5 pb-3 pt-3 fonte-tema text-center">Edição de dados 📋</h1>

<div class="container fonte-tema">
    <form action="../crud/atualizar-perfil.php?id=<?php echo $id_ong?>" method="post" class="fonte-tema mb-5">
        <div class="row">
            <div class="col-md-6">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control border-3" type="text" name="nome" id="nome" value="<?php echo $nome ?>">
            </div>
            <div class="col-md-6">
                <label class="form-label" for="email">Email:</label>
                <input class="form-control border-3" type="text" name="email" id="email" value="<?php echo $email ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <label class="form-label" for="telefone">Telefone:</label>
                <input class="form-control border-3" type="text" name="telefone" id="telefone" value="<?php echo $telefone ?>">
            </div>
            <div class="col-md-9">
                <label class="form-label" for="endereco">Endereço:</label>
                <input class="form-control border-3" type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="form-label" for="bairro">Bairro</label>
                <input class="form-control border-3" type="text" name="bairro" id="bairro" value="<?php echo $bairro ?>">
            </div>
            <div class="col-md-4">
                <label class="form-label" for="cidade">Cidade:</label>
                <select name="cidade" id="cidade" class="form-select text-center border-3">
                    <option value="<?php echo $cidade  ?>"> <?php echo $cidade  ?> </option>
                    <option value="Americana">Americana</option>
                    <option value="Santa Barbara D Oeste">Santa Barbara D Oeste</option>
                    <option value="Nova Odessa">Nova Odessa</option>
                    <option value="Sumare">Sumaré</option>
                    <option value="Limeira">Limeira</option>
                </select>
            </div>
            <div class="col-md-4">
                <label class="form-label" for="estado">Estado:</label>
                <select class="form-select border-3" name="estado" id="estao">
                    <option value="<?php echo $estado ?>"> <?php echo $estado ?> </option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <label class="form-label" for="cnpj_cpf">CNPJ/CPF:</label>
                <input class="form-control border-3" type="text" name="cnpj_cpf" id="cnpj_cpf" value="<?php echo $cnpj_cpf ?>">
            </div>
            <div class="col-md-3">
                <label class="form-label" for="senha">Senha:</label>
                <input class="form-control border-3" type="password" name="senha" id="senha" value="<?php echo $senha ?>">
            </div>
        </div>
        <div class="row pt-md-3">
            <div class="col text-center">
                <button class="cor-btn-blocopets">ALTERAR</button>
            </div>
        </div>
    </form>
</div>


<?php
endwhile;
mysqli_close($conexao);
include "../inc/rodape.php";
?>