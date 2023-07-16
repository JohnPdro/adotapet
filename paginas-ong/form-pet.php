<?php
include "../inc/cabecalho-ong.php";
?>

<main class=" container-fluid">
    <div class="row pt-5 fonte-tema">
        <div class="col-12">
            <h1 class="text-center mb-3">INFORMAÇÕES DO ANIMAL</h1>
        </div>
    </div>
    <form class="fonte-tema p-5" action="../crud/novo-pet.php" method="post">
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
            <div class="col-6 ">
                <label for="nome" class="form-label ">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control">
            </div>
            <div class="col ">
                <label for="sexo" class="form-label">Sexo:</label>
                <select class="form-select text-center" name="sexo" id="sexo">
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="Macho">Macho</option>
                    <option value="Femea">Femêa</option>
                </select>
            </div>
            <div class="col">
                <label for="tamanho" class="form-label">Tamanho:</label>
                <select class="form-select text-center" name="tamanho" id="tamanho">
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="Pequeno">Pequeno</option>
                    <option value="Medio">Médio</option>
                    <option value="Grande">Grande</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2">
                <label for="idade" class="form-label">Idade</label>
                <input type="text" name="idade" id="idade" class="form-control" placeholder="Aproximadamente">
            </div>
            <div class="col-5">
                <label for="cidade" class="form-label">Cidade:</label>
                <select name="cidade" id="cidade" class="form-select">
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="Americana">Americana</option>
                    <option value="Santa Barbara D'Oeste">Santa Barbara D'Oeste</option>
                    <option value="Nova Odessa">Nova Odessa</option>
                    <option value="Sumare">Sumaré</option>
                    <option value="Limeira">Limeira</option>
                </select>
            </div>
            <div class="col-5">
                <label class="form-label" for="estado">Estado:</label>
                <select class="form-select" name="estado" id="estado">
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
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col text-center">
                <button class="cor-btn-blocopets">SALVAR</button>
            </div>
        </div>
    </form>
</main>

<?php
include "../inc/rodape.php";
?>