<?php
include "../inc/cabecalho-ong.php";
?>

<main class=" container-fluid">
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb ms-5 pt-4 fonte-tema">
            <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Formulário</li>
        </ol>
    </nav>
    <div class="row pt-3 fonte-tema">
        <div class="col-12">
            <h1 class="text-center mb-3">Informações do pet 🧸</h1>
        </div>
    </div>
    <form class="fonte-tema p-5" action="../crud/novo-pet.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col text-center">
                <label for="cachorro"><img src="../img/icone-cao.png" width="100px" alt=""></label><br>
                <input class="mb-5" type="radio" name="especie" value="Cachorro" id="cachorro" checked>
            </div>
            <div class="col  text-center">
                <label for="gato"><img src="../img/icone-gato.png" width="100px" alt=""></label><br>
                <input class="mb-5" type="radio" name="especie" value="Gato" id="gato">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6 ">
                <label for="nome" class="form-label ">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            <div class="col-md-3 ">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select text-center" name="sexo" id="sexo" required>
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="Macho">Macho</option>
                    <option value="Femea">Femêa</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="tamanho" class="form-label">Tamanho:</label>
                <select class="form-select text-center" name="tamanho" id="tamanho" required>
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="Pequeno">Pequeno</option>
                    <option value="Medio">Médio</option>
                    <option value="Grande">Grande</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" name="idade" id="idade" class="form-control" placeholder="ex: 3 Anos" required>
            </div>
            <div class="col-md-5">
                <label for="cidade" class="form-label">Cidade:</label>
                <select name="cidade" id="cidade" class="form-select text-center" required>
                    <option value="none">--- ESCOLHA ---</option>
                    <option value="Americana">Americana</option>
                    <option value="Santa Barbara D Oeste">Santa Barbara D Oeste</option>
                    <option value="Nova Odessa">Nova Odessa</option>
                    <option value="Sumare">Sumaré</option>
                    <option value="Limeira">Limeira</option>
                </select>
            </div>
            <div class="col-md-5">
                <label class="form-label" for="estado">Estado:</label>
                <select class="form-select text-center" name="estado" id="estado" required>
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="SP">São Paulo</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="form-label" for="sobre_pet">Fala um pouco sobre o pet!</label>
                <textarea class="form-control" name="sobre_pet" id="sobre_pet" cols="30" rows="5" placeholder="Descrava caracteristicas, comportamento. Um texto com informção do pet ajuda na hora da escolha!!❤"></textarea>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col">
                <label for="foto" class="form-label">Escolha uma imagem do pet! 📷</label>
                <input class="form-control" type="file" name="foto" id="foto" required>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center">
                <button class="cor-btn-blocopets" name="submit">SALVAR</button>
            </div>
        </div>
    </form>
</main>

<?php
include "../inc/rodape.php";
?>