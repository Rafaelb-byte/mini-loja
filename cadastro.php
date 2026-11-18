<?php
// cadastro.php: o CONTROLE.
// Recebe o formulário, pede ao modelo (banco.php) e chama a visão (tela.php).
require __DIR__ . '/banco.php';

$mensagem = '';

// o formulário foi enviado? por enquanto, só confirma o que chegou
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = trim($_POST['nome'] ?? '');
    $preco = (float) ($_POST['preco'] ?? 0);
    $mensagem = 'Recebi: ' . $nome . ', por R$ ' . number_format($preco, 2, ',', '.');
}

$produtos = listarProdutos();

require __DIR__ . '/tela.php';
