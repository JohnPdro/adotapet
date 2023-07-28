<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";
?>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb ms-5 pt-4 fonte-tema">
        <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Perfil</li>
    </ol>
</nav>

<h1 class=" ps-5 pb-3 pt-3 fonte-tema text-center">Bem vindo de volta 😺</h1>

<h2 class="ps-5 pb-4 pt-3 fonte-tema">Suas informações</h2>

<div class="container fonte-tema">
    <form action="" method="" class="fonte-tema mb-5">
        <div class="row">
            <div class="col">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="email">Email:</label>
                <input class="form-control" type="text" name="email" id="email" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label class="form-label" for="telefone">Telefone:</label>
                <input class="form-control" type="text" name="telefone" id="telefone" disabled>
            </div>
            <div class="col-9">
                <label class="form-label" for="endereco">Endereço:</label>
                <input class="form-control" type="text" name="endereco" id="endereco" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label class="form-label" for="bairro">Bairro</label>
                <input class="form-control" type="text" name="bairro" id="bairro" disabled>
            </div>
            <div class="col-4">
                <label class="form-label" for="cidade">Cidade:</label>
                <input class="form-control" type="text" name="cidade" id="cidade" disabled>
            </div>
            <div class="col-4">
                <label class="form-label" for="estado">Estado:</label>
                <input class="form-control" type="text" name="estado" id="estado" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <label class="form-label" for="cnpj_cpf">CNPJ/CPF:</label>
                <input class="form-control" type="text" name="cnpj_cpf" id="cnpj_cpf" disabled>
            </div>
            <div class="col-3">
                <label class="form-label" for="senha">Senha:</label>
                <input class="form-control" type="password" name="senha" id="senha" disabled>
            </div>
        </div>
    </form>
    <p class="mb-5 mt-2 text-center fonte-fredoka">
        <a href="../crud/editar-perfil.php?id=<?php ?>" role="button" class="cor-btn-blocopets">EDITAR</a>
    </p>
</div>


<?php
include "../inc/rodape.php";
?>