<?php // tela-funcionario.php: a VISÃO da área do funcionário. Só o HTML ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mini Loja · Funcionário</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <p class="voltar"><a href="index.html">← Página inicial</a></p>
    <h1>Área do funcionário</h1>

    <?php if ($erro): ?>
      <div class="alerta-erro">
        <strong>Não deu:</strong> <?= htmlspecialchars($erro) ?>
      </div>
    <?php endif; ?>

    <?php if ($aviso): ?>
      <div class="alerta-sucesso">
        <?= htmlspecialchars($aviso) ?>
      </div>
    <?php endif; ?>

    <!-- já entrou? mostra quem é e o botão de sair -->
    <?php if ($logado): ?>
      <div class="barra-logado">
        <span>Olá, <strong><?= htmlspecialchars($logado) ?></strong>!</span>
        <div class="acoes-logado">
          <a href="cadastro.php" class="botao">Cadastrar produtos</a>
          <a href="funcionario.php?sair=1" class="btn-sair">Sair</a>
        </div>
      </div>
    <?php else: ?>
      <h2>Entrar</h2>
      <form method="post" action="funcionario.php" class="formulario">
        <input type="hidden" name="acao" value="entrar">

        <div class="campo">
          <label for="email-entrar">E-mail</label>
          <input id="email-entrar" name="email" type="email" required>
        </div>

        <div class="campo">
          <label for="senha-entrar">Senha</label>
          <input id="senha-entrar" name="senha" type="password" required>
        </div>

        <div class="botoes-form">
          <button type="submit" class="botao">Entrar</button>
        </div>
      </form>
    <?php endif; ?>

    <h2>Cadastrar funcionário</h2>
    <form method="post" action="funcionario.php" class="formulario">
      <input type="hidden" name="acao" value="cadastrar">

      <div class="campo">
        <label for="nome">Nome</label>
        <input id="nome" name="nome" type="text" required>
      </div>

      <div class="campo">
        <label for="email">E-mail</label>
        <input id="email" name="email" type="email" required>
      </div>

      <div class="campo">
        <label for="senha">Senha (8 caracteres ou mais)</label>
        <input id="senha" name="senha" type="password" minlength="8" required>
      </div>

      <div class="botoes-form">
        <button type="submit" class="botao">Cadastrar</button>
      </div>
    </form>
  </div>
</body>
</html>