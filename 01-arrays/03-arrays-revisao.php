<?php

$produto = [
    'nome' => 'Calça Jeans',
    'quantidade' => 15,
    // 'cor' => [
    //     'azul',
    //     'verde',
    //     'amarela',
    // ],
];
$produto['cor'][] = 'azul';
$produto['cor'][] = 'verde';
$produto['cor'][] = 'amarela';
