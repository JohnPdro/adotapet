<?php
include "../inc/conexao.php";
?>

<?php
$sql = "select * from animais";
$todos_registros = mysqli_query($conexao, $sql);
while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
?>
    <div class="col m-2 ">
        <div class="card p-2" style="width: 20rem;">
            <img src="<?php echo $um_registro['foto']; ?>" class="card-img-top" alt="Foto do animal">
            <div class="card-body">
                <h5 class="card-title fs-3"><?php echo $um_registro['nome']; ?> - <?php echo $um_registro['especie']; ?></h5>
                <p class="card-text  pt-2 fs-4"><?php echo $um_registro['sexo']; ?> <br> <?php echo $um_registro['idade']; ?></p>

                <button type="button" class="cor-btn-blocopets" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $um_registro['id_animal']; ?>">Mais do Pet</button>
                <div class="modal fade" id="exampleModal<?php echo $um_registro['id_animal']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                            </div>
                            <div class="modal-body text-center fs-5 p-2">
                            <img src="<?php echo $um_registro['foto']; ?>" class="modal-img-top img-fluid mb-3" alt="Foto do animal">
                                <h1 class="modal-title fs-5">Mais informações de <?php echo $um_registro['nome']; ?> </h1>
                                <p class="p-4">Especie: <?php echo $um_registro['especie'];?>   |   Sexo: <?php echo $um_registro['sexo']; ?> <br>
                                Tamanho: <?php echo $um_registro['tamanho']; ?>   |   Idade: <?php echo $um_registro['idade']; ?> <br>
                                Cidade: <?php echo $um_registro['cidade']; ?>   |   Estado: <?php echo $um_registro['estado']; ?> <br>
                                Mais sobre o pet <br> <?php echo $um_registro['sobre_pet']; ?></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">FECHAR</button>
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