<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";

$email = $_GET["email"];

$sql = "select * from ongs where email = '$email'";
$todos_registros = mysqli_query($conexao, $sql);
while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
?>

    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb ms-5 pt-4 fonte-tema">
            <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
    </nav>

    <h1 class=" ps-5 pb-3 pt-1 fonte-tema text-center">Bem vindo de volta <?php echo $um_registro["nome"]?> 😺</h1>

    <h2 class="ps-5 pb-4 pt-2 fonte-tema">Suas informações</h2>

    <div class="container fonte-tema">
        <form action="../crud/editar-perfil.php" method="post" class="fonte-tema  mb-3">
            <div class="row mb-2">
                <div class="col-md-6">
                    <label class="form-label fs-5" for="nome">Nome: </label>
                    <input class="form-control fs-5" type="text" name="nome" id="nome" value="<?php echo $um_registro["nome"] ?>" disabled>
                </div>
                <div class="col-md-6">
                    <label class="form-label fs-5" for="email">Email:</label>
                    <input class="form-control fs-5" type="text" name="email" id="email" value="<?php echo $um_registro["email"]  ?>" disabled>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-3">
                    <label class="form-label fs-5" for="telefone">Telefone:</label>
                    <input class="form-control fs-5" type="text" name="telefone" id="telefone" value="<?php echo $um_registro["telefone"]  ?>" disabled>
                </div>
                <div class="col-md-9">
                    <label class="form-label fs-5" for="endereco">Endereço:</label>
                    <input class="form-control fs-5" type="text" name="endereco" id="endereco" value="<?php echo $um_registro["endereco"]  ?>" disabled>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-4">
                    <label class="form-label fs-5" for="bairro">Bairro</label>
                    <input class="form-control fs-5" type="text" name="bairro" id="bairro" value="<?php echo $um_registro["bairro"]  ?>" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label fs-5" for="cidade">Cidade:</label>
                    <input class="form-control fs-5" type="text" name="cidade" id="cidade" value="<?php echo $um_registro["cidade"]  ?>" disabled>
                </div>
                <div class="col-md-4">
                    <label class="form-label fs-5" for="estado">Estado:</label>
                    <input class="form-control fs-5" type="text" name="estado" id="estado" value="<?php echo $um_registro["estado"]  ?>" disabled>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-md-9">
                    <label class="form-label fs-5" for="cnpj_cpf">CNPJ/CPF:</label>
                    <input class="form-control fs-5" type="text" name="cnpj_cpf" id="cnpj_cpf" value="<?php echo $um_registro["cnpj_cpf"]  ?>" disabled>
                </div>
                <div class="col-md-3">
                    <label class="form-label fs-5" for="senha">Senha:</label>
                    <input class="form-control fs-5" type="password" name="senha" id="senha" value="<?php echo $um_registro["senha"]  ?>" disabled>
                </div>
            </div>
        </form>
        <p class="mb-4 pt-3 text-center fonte-fredoka">
            <a href="../crud/editar-perfil.php?id=<?php echo $um_registro['id_ong'] ?>" role="button" class="cor-btn-blocopets">EDITAR</a>
            <a href="../paginas/home.php" role="button" class="ms-5 cor-btn-blocopets">SAIR</a>
        </p>
    </div>

<?php
endwhile
?>


<?php
include "../inc/rodape.php";
?>