<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";
?>

<h1 class="p-5 fonte-tema">Tabela de Pets Cadastrados</h1>

<div class="container fonte-fredoka">
  <table class="table fonte-tema">
    <tr>
      <td>Código</td>
      <td>Especie</td>
      <td>Nome</td>
      <td>Sexo</td>
      <td>Tamanho</td>
      <td>Idade</td>
      <td>Cidade</td>
      <td>Estado</td>
      <td>Sobre o Pet</td>
      <td>Ações</td>
    </tr>
    <?php
    $sql = "select * from animais";
    $todos_registros = mysqli_query($conexao, $sql);
    while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
    ?>
      <tr>
        <td> <?php echo $um_registro['id_animal']; ?></td>
        <td> <?php echo $um_registro['especie']; ?></td>
        <td> <?php echo $um_registro['nome']; ?></td>
        <td> <?php echo $um_registro['sexo']; ?></td>
        <td> <?php echo $um_registro['tamanho']; ?></td>
        <td> <?php echo $um_registro['idade']; ?></td>
        <td> <?php echo $um_registro['cidade']; ?></td>
        <td> <?php echo $um_registro['estado']; ?></td>
        <td> <?php echo $um_registro['sobre_pet']; ?></td>
        <td>
          <a class="p-2" href="../crud/visualizar.php?id=<?php echo $um_registro['id_animal']; ?>"><img src="../img/icon-visualizar.png" width="30" alt="Icone de visualizar" title="Visualizar"></a>
          <a class="p-2" href="../crud/editar.php?id=<?php echo $um_registro['id_animal']; ?>"><img src="../img/icon-editar.png" width="30" alt="Icone de editar" title="Editar"></a>
          <a class="p-2" href="../crud/deletar.php?id=<?php echo $um_registro['id_animal']; ?>"><img src="../img/icon-excluir.png" width="30" alt="Icone de excluir" title="Excluir"></a>
        </td>
      </tr>
    <?php
    endwhile;
    ?>

  </table>
</div>
<p class="mb-5 mt-2 text-center fonte-fredoka">
  <a href="../paginas-ong/form-pet.php" role="button" class="cor-btn-blocopets">Novo Cadastro</a>
</p>
<?php
mysqli_close($conexao);
include "../inc/rodape.php";
?>