<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";

?>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb ms-5 pt-4 fonte-tema">
        <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
        <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/perfil-ong.php">Perfil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edição de perfil</li>
    </ol>
</nav>

<h1 class=" ps-5 pb-3 pt-3 fonte-tema text-center">Edição de perfil 📋</h1>

<div class="container fonte-tema">
    <form action="" method="" class="fonte-tema mb-5">
        <div class="row">
            <div class="col">
                <label class="form-label" for="nome">Nome:</label>
                <input class="form-control border-3" type="text" name="nome" id="nome" value="<?php  ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label class="form-label" for="email">Email:</label>
                <input class="form-control border-3" type="text" name="email" id="email" value="<?php  ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label class="form-label" for="telefone">Telefone:</label>
                <input class="form-control border-3" type="text" name="telefone" id="telefone" value="<?php  ?>">
            </div>
            <div class="col-9">
                <label class="form-label" for="endereco">Endereço:</label>
                <input class="form-control border-3" type="text" name="endereco" id="endereco" value="<?php  ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <label class="form-label" for="bairro">Bairro</label>
                <input class="form-control border-3" type="text" name="bairro" id="bairro" value="<?php  ?>">
            </div>
            <div class="col-4">
                <label class="form-label" for="cidade">Cidade:</label>
                <select name="cidade" id="cidade" class="form-select text-center border-3">
                    <option value="<?php  ?>"> <?php  ?> </option>
                    <option value="Americana">Americana</option>
                    <option value="Santa Barbara D Oeste">Santa Barbara D Oeste</option>
                    <option value="Nova Odessa">Nova Odessa</option>
                    <option value="Sumare">Sumaré</option>
                    <option value="Limeira">Limeira</option>
                </select>
            </div>
            <div class="col-4">
                <label class="form-label" for="estado">Estado:</label>
                <select class="form-select border-3" name="estado" id="estao">
                    <option value="<?php ?>"> <?php  ?> </option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-9">
                <label class="form-label" for="cnpj_cpf">CNPJ/CPF:</label>
                <input class="form-control border-3" type="text" name="cnpj_cpf" id="cnpj_cpf" value="<?php ?>">
            </div>
            <div class="col-3">
                <label class="form-label" for="senha">Senha:</label>
                <input class="form-control border-3" type="password" name="senha" id="senha" value="<?php ?>">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col text-center">
                <button class="cor-btn-blocopets">ALTERAR</button>
            </div>
        </div>
    </form>
</div>


<?php
include "../inc/rodape.php";
?>