<?php // tela.php: a VISÃO. Só o HTML; as variáveis vêm do cadastro.php ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Mini Loja</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <p class="voltar"><a href="index.html">← Página inicial</a></p>
    <h1>Mini Loja</h1>

    <?php if ($mensagem): ?>
      <p class="alerta">
        <strong><?= htmlspecialchars($mensagem) ?></strong> 
        <a href="cadastro.php">Ver a lista de novo</a>
      </p>
    <?php endif; ?>

    <h2>Novo produto</h2>
    <form method="post" action="cadastro.php" class="formulario">
      <label for="nome">Nome</label>
      <input id="nome" name="nome" required>

      <label for="preco">Preço (R$)</label>
      <input id="preco" name="preco" type="number" step="0.01" min="0" required>

      <button type="submit" class="botao">Cadastrar</button>
    </form>

    <h2>Produtos (<?= count($produtos) ?>)</h2>
    <ul class="lista-produtos">
      <?php foreach ($produtos as $item): ?>
        <li>
          <span><?= htmlspecialchars($item['nome']) ?></span>
          <strong>R$ <?= number_format($item['preco'], 2, ',', '.') ?></strong>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>