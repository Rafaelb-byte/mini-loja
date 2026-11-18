<?php
// banco.php: o MODELO.
// Guarda os dados da loja. Por enquanto é uma lista fixa; na aula 12, vira um banco de verdade.

// R: devolve todos os produtos
function listarProdutos(): array
{
    // cada produto é um array com duas chaves: 'nome' e 'preco'
    return [
        ['nome' => 'Arduino Uno', 'preco' => 59.90],
        ['nome' => 'Placa ESP32', 'preco' => 39.90],
        ['nome' => 'Sensor de temperatura DHT11', 'preco' => 12.50],
    ];
}
