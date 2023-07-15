<?php
include "../inc/cabecalho-ong.php";

?>
<main>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- Dimesão da imagem do carrossel 1280x480 -->
                    <img src="../img/fundo-carrossel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/fundo-carrossel4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../img/fundo-carrossel3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center m-5 fonte-titulo-home">Encontre seu companheiro ❤</h1>
            </div>
        </div>
        <div class="row">
            <?php
                include "../inc/bloco-pets.php";
            ?>
        </div>
    </div>
</main>

<?php
include "../inc/rodape.php";
?>