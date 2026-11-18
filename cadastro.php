<?php
// cadastro.php: o CONTROLE.
// Recebe o formulário, pede ao modelo (banco.php) e chama a visão (tela.php).
require __DIR__ . '/banco.php';

$produtos = listarProdutos();
$mensagem = '';

// o formulário foi enviado? o produto entra no fim da lista... só nesta página
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $preco = (float) ($_POST['preco'] ?? 0);
    $produtos[] = ['nome' => $nome, 'preco' => $preco];
    $mensagem = 'Entrou na lista: ' . $nome . '.';
}

require __DIR__ . '/tela.php';
