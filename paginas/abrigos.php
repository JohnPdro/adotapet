<?php
include "../inc/cabecalho.php";
?>

<main>
    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb ms-5 pt-4 fonte-tema">
            <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas/home.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Abrigos</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row fonte-tema">
            <div class="col">
                <h1 class="text-center fonte-tema">Conheça abrigos em Americana e região 🏡</h1>
                <h4 class="text-center mt-3 mb-4 fonte-tema">Clique nas fotos para ver mais sobre as Ongs!!</h4>
            </div>
        </div>
        <div class="row">
            <?php
            include "../inc/bloco-abrigos.php";
            ?>
        </div>
    </div>
</main>


<?php
include "../inc/rodape.php";
?>