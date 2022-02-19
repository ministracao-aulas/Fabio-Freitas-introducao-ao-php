<?php
$pessoas = [
    [
        'nome' => 'Marcos',
        'emails' => [
            'marcos1@gmail.com',
            'marcos2@hotmail.com',
        ],
        'endereco' => [
            'rua' => 'Rua 7 de Setembro',
            'numero' => 1247,
        ],
    ],
    [
        'nome' => 'Pedro',
        'emails' => [
            'Pedro1@gmail.com',
            'Pedro2@hotmail.com',
        ],
        'endereco' => [
            'rua' => 'Rua 7 de Setembro',
            'numero' => 1247,
        ],
    ]
];
foreach ($pessoas as $pessoa)
{
    foreach($pessoa['emails'] as $email)
    {
        echo $email."<br>";
    }
    echo"<hr>";
}
die;
