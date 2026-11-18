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

    <h2><?= $produto ? 'Editar produto' : 'Novo produto' ?></h2>
    <form method="post" action="cadastro.php" class="formulario">
      <!-- o id escondido diz ao controle qual produto editar (vazio = produto novo) -->
      <input type="hidden" name="id" value="<?= $produto['id'] ?? '' ?>">

      <label for="nome">Nome</label>
      <input id="nome" name="nome" required value="<?= htmlspecialchars($produto['nome'] ?? '') ?>">

      <label for="preco">Preço (R$)</label>
      <input id="preco" name="preco" type="number" step="0.01" min="0" required value="<?= $produto['preco'] ?? '' ?>">

      <div class="botoes-form">
        <button type="submit" class="botao"><?= $produto ? 'Salvar alterações' : 'Cadastrar' ?></button>
        <?php if ($produto): ?>
          <a href="cadastro.php" class="btn-cancelar">Cancelar</a>
        <?php endif; ?>
      </div>
    </form>

    <h2>Produtos (<?= count($produtos) ?>)</h2>
    <ul class="lista-produtos">
      <?php foreach ($produtos as $item): ?>
        <li>
          <div class="info-produto">
            <span><?= htmlspecialchars($item['nome']) ?></span>
            <strong>R$ <?= number_format($item['preco'], 2, ',', '.') ?></strong>
          </div>
          <div class="acoes-item">
            <a href="cadastro.php?editar=<?= $item['id'] ?>" class="btn-editar">Editar</a>
            <form method="post" action="cadastro.php" class="form-excluir">
              <button name="excluir" value="<?= $item['id'] ?>" class="btn-excluir">Excluir</button>
            </form>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>