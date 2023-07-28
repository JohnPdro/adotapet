<?php
include "../inc/cabecalho-ong.php";
include "../inc/conexao.php";
?>

<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='10' height='10'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb ms-5 pt-4 fonte-tema">
    <li class="breadcrumb-item"><a class="cor-breadcrumb" href="../paginas-ong/home-ong.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Pets Cadastrados</li>
  </ol>
</nav>

<h1 class=" ps-5 pb-5 pt-3 fonte-tema">Tabela de Pets Cadastrados</h1>

<div class="container fonte-fredoka">
  </table>
  <table class="table table-hover fonte-tema">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Especie</th>
        <th scope="col">Nome</th>
        <th scope="col">Sexo</th>
        <th scope="col">Tamanho</th>
        <th scope="col">Idade</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Sobre o Pet</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "select * from animais";
      $todos_registros = mysqli_query($conexao, $sql);
      while ($um_registro = mysqli_fetch_assoc($todos_registros)) :
      ?>
        <tr>
          <td scope="col"><?php echo $um_registro['id_animal']; ?></td>
          <td scope="col"><?php echo $um_registro['especie']; ?></td>
          <td scope="col"><?php echo $um_registro['nome']; ?></td>
          <td scope="col"><?php echo $um_registro['sexo']; ?></td>
          <td scope="col"><?php echo $um_registro['tamanho']; ?></td>
          <td scope="col"><?php echo $um_registro['idade']; ?></td>
          <td scope="col"><?php echo $um_registro['cidade']; ?></td>
          <td scope="col"><?php echo $um_registro['estado']; ?></td>
          <td scope="col"><?php echo $um_registro['sobre_pet']; ?></td>
          <td scope="col"><a class="p-2" href="../crud/visualizar.php?id=<?php echo $um_registro['id_animal']; ?>"><img src="../img/icon-visualizar.png" width="30" alt="Icone de visualizar" title="Visualizar"></a>
            <a class="p-2" href="../crud/editar.php?id=<?php echo $um_registro['id_animal']; ?>"><img src="../img/icon-editar.png" width="30" alt="Icone de editar" title="Editar"></a>
            <a class="p-2" href="../crud/deletar.php?id=<?php echo $um_registro['id_animal']; ?>"><img src="../img/icon-excluir.png" width="30" alt="Icone de excluir" title="Excluir"></a>
          </td>
        </tr>
    </tbody>
  <?php
      endwhile;
  ?>
  </table>

</div>
<p class="mb-5 mt-5 text-center fonte-fredoka">
  <a href="../paginas-ong/form-pet.php" role="button" class="cor-btn-blocopets">NOVO CADASTRO</a>
</p>
<?php
mysqli_close($conexao);
include "../inc/rodape.php";
?>