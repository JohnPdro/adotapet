<?php
include "../inc/cabecalho.php";
?>

<main class=" container mb-3">
    <div class="row pt-5 fonte-formpet">
        <div class="col-12">
            <h1 class="text-center">INFORMAÇÕES DO ANIMAL</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form class="fonte-formpet" action="novo-pet.php" method="post">
                <div class="row">
                    <div class="col text-center">
                        <label class="m-5" for="cachorro"><img src="../img/icone-cao.png" width="100px" alt=""></label>
                        <input type="radio" name="especie" id="cachorro" checked>
                        <label class="m-5" for="gato"><img src="../img/icone-gato.png" width="100px" alt=""></label>
                        <input type="radio" name="especie" id="gato">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5 ms-5">
                        <label for="nome" class="form-label ">Nome:</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>
                    <div class="col-3 ">
                        <label for="sexo" class="form-label">Sexo:</label>
                        <select class="form-select text-center" name="sexo" id="sexo">
                            <option value="vazio">--- ESCOLHA ---</option>
                            <option value="macho">Macho</option>
                            <option value="femea">Femêa</option>
                        </select>
                    </div>
                    <div class="col-3">
                        <label for="tamanho" class="form-label">Tamanho:</label>
                        <select class="form-select text-center" name="tamanho" id="tamanho">
                            <option value="vazio">--- ESCOLHA ---</option>
                            <option value="pequeno">Pequeno</option>
                            <option value="medio">Médio</option>
                            <option value="grande">Grande</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-2 ms-5">
                        <label for="idade" class="form-label">Idade</label>
                        <input type="text" name="idade" id="idade" class="form-control">
                    </div>
                    <div class="col-5">
                        <label for="cidade" class="form-label">Cidade:</label>
                        <select name="cidade" id="cidade" class="form-select">
                            <option value="vazio">--- ESCOLHA ---</option>
                            <option value="americana">Americana</option>
                            <option value="santa-barbara">Santa Barbara D'Oeste</option>
                            <option value="nova-odessa">Nova Odessa</option>
                            <option value="sumare">Sumaré</option>
                            <option value="limeira">Limeira</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label class="form-label" for="estado">Estado:</label>
                        <select class="form-select" name="estado" id="estado">
                            <option value="vazio">--- ESCOLHA ---</option>
                            <option value="sp">São Paulo</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-11 ms-5">
                        <label class="form-label" for="sobre-pet">Fala um pouco sobre o pet!</label>
                        <textarea class="form-control" name="sobre-pet" id="sobre-pet" cols="30" rows="10" placeholder="Descrava caracteristicas, comportamento. Um texto com informção do pet ajuda na hora da escolha!!❤"></textarea>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-11 ms-5">
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
        </div>
    </div>
</main>

<?php
include "../inc/rodape.php";
?>