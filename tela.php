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