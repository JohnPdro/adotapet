<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Cadastro </title>
  <link rel="stylesheet" href="../css/style-cadastro.css">
  <link rel="shortcut icon" href="../img/favicon-16x16.png" type="image/x-icon">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
  <div class="container">
    <div class="form-image">
      <img src="../img/fundo-cadastro.svg"> <!-- observação aparentemente é necessario que a imagem seja .svg para funcionar o código -->
    </div>
    <div class="form">
      <form action="../crud/inserir.php" method="post"> <!-- o "#" somente está ai porque no momento eu ainda não defini uma ação no js -->
        <div class="form-header">

          <div class="title">
            <h1>Cadastre-se</h1>
          </div>

          <div id="msgError"></div>
          <div id="msgSuccess"></div>

          <div class="login-button">
            <a href="login.php">Login</a>
          </div>
        </div>

        <div class="input-group">
          <div class="input-box">
            <label id="labelNome" for="nome">Nome</label>
            <input id="nome" type="text" name="nome" placeholder="Nome da Ong/Protetor" required>
          </div>

          <div class="input-box">
            <label id="labelEmail" for="email">Email</label>
            <input id="email" type="email" name="email" placeholder="Informe um Email válido" required>
          </div>

          <div class="input-box">
            <label id="labelTelefone" for="telefone">Telefone</label>
            <input id="telefone" type="text" name="telefone" placeholder="ex: (00) 00000-0000" required>
          </div>

          <div class="input-box">
            <label id="labelEndereco" for="endereco">Endereço</label>
            <input id="endereco" type="text" name="endereco" placeholder="Rua e número" required>
          </div>

          <div class="input-box">
            <label id="labelBairro" for="bairro">Bairro</label>
            <input id="bairro" type="text" name="bairro" placeholder="Digite o Bairro" required>
          </div>

          <div class="input-box">
            <label id="labelCidade" for="cidade">Cidade</label>
            <select name="cidade" id="cidade" required>
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="Americana">Americana</option>
                    <option value="Santa Barbara D Oeste">Santa Barbara D Oeste</option>
                    <option value="Nova Odessa">Nova Odessa</option>
                    <option value="Sumare">Sumaré</option>
                    <option value="Limeira">Limeira</option>
                </select>
          </div>

          <div class="input-box">
            <label id="labelEstado" for="estado">Estado</label>
              <select class="tamanho-select-estado" name="estado" id="estado" required>
                    <option value="vazio">--- ESCOLHA ---</option>
                    <option value="SP">São Paulo</option>
              </select>
          </div>

          <div class="input-box">
            <label id="labelCnpj_Cpf" for="cnpj_cpf">CNPJ/CPF</label>
            <input id="cnpj_cpf" type="text" name="cnpj_cpf" placeholder="ex: xx.xxx.xxx/xxxx-xx" required>
          </div>

          <div class="input-box">
            <label id="labelSenha" for="senha">Senha</label>
            <input id="senha" type="password" name="senha" placeholder="Mínimo 6 digítos" required>
          </div>

          <div class="input-box">
            <label id="labelConfirmSenha" for="ConfirmSenha">Confirmar Senha</label>
            <input id="ConfirmSenha" type="password" name="ConfirmSenha" placeholder="Digite sua senha novamente" required>
          </div>

        </div>
        <div class="cadastrar-button">
          <button type="submit">Cadastrar</button><!-- para linkar com a homepage basta substituir o "#" pelo link da homepage -->
        </div>
      </form>
    </div>
  </div>

  <script src="../js/cadastro.js"></script>
</body>
</html>