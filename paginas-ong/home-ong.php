<?php
include "../inc/cabecalho-ong.php";

?>
<main>
    <div id="carouselExampleInterval" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="3000">
                <img src="../img/fundo-carrossel.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../img/fundo-carrossel4.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <img src="../img/fundo-carrossel3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center m-5 fonte-tema">Encontre seu companheiro ❤</h1>
            </div>
        </div>
        <div class="row">
            <div class="container-cards">
                <div class="row fonte-tema">
                    <?php
                        include "../inc/bloco-pets.php";
                    ?>
                </div>
            </div>
        </div>
</main>

<?php
include "../inc/rodape.php";
?>