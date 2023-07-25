<?php
include "../inc/conexao.php";
?>

<?php
$sql = "select * from animais";
$todos_registros = mysqli_query($conexao, $sql);
while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
?>
    <div class="col m-2">
        <div class="card p-2" style="width: 20rem;">
            <img src="<?php echo $um_registro['foto']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-3"><?php echo $um_registro['nome']; ?></h5>
                <p class="card-text  pt-2 fs-5"><?php echo $um_registro['sexo']; ?></p>
                <p class="card-text  fs-5"><?php echo $um_registro['idade']; ?></p>
                <p class="card-text  pb-2 fs-5"><?php echo $um_registro['sobre_pet']; ?></p>
                <button type="button" class="cor-btn-blocopets" data-bs-toggle="modal" data-bs-target="#exampleModal">Mais do Pet</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="<?php echo $um_registro['foto']; ?>" class="modal-img-top" alt="...">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h1 class="modal-title fs-5">Mais informações de <?php echo $um_registro['nome']; ?> </h1>
                                <p><?php echo $um_registro['especie']; ?></p>
                                <p><?php echo $um_registro['sexo']; ?></p>
                                <p><?php echo $um_registro['tamanho']; ?></p>
                                <p><?php echo $um_registro['idade']; ?></p>
                                <p><?php echo $um_registro['cidade']; ?></p>
                                <p><?php echo $um_registro['estado']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
endwhile;
?>