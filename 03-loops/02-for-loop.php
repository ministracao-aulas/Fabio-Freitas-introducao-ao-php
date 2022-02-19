<?php

/*
for(
    1 - INIT;
    2 - CHECK;
    4 - LAST
)
{
    3 - EXEC
}
*/

// for(
//     $max = 3, $iterator = 0;
//     $iterator <= $max;
//     $iterator++
// )
// {
//     echo "Value {$max} - {$iterator} <br>";
// }


// $nomes = [
//     'João',
//     'Maria',
//     'José',
//     'Pedro',
//     'Fábio',
//     'Tiago',
// ];
// echo "Olá ". $nomes[0]."<br>";

// $total = count($nomes);
// for($index = 0; $index < $total; $index++)
// {
//     echo "Olá ". $nomes[$index]."<br>";
// }

$pessoas = [
    [
        "name" => 'João',
        'address' => [
            'street' => 'Rua Xyz, 123',
        ],
        'phones' => ['9999-123', '888-123']
    ],
    [
        "name" => 'Maria',
        'address' => [
            'street' => 'Rua Xyz, 234',
        ],
        'phones' => ['9999-234', '888-234']
    ],
    [
        "name" => 'José',
        'address' => [
            'street' => 'Rua Xyz, 345',
        ],
        'phones' => ['9999-345', '888-345']
    ],
    [
        "name" => 'Pedro',
        'address' => [
            'street' => 'Rua Xyz, 456',
        ],
        'phones' => ['9999-456', '888-456']
    ],
    [
        "name" => 'Fábio',
        'address' => [
            'street' => 'Rua Xyz, 567',
        ],
        'phones' => ['9999-567', '888-567']
    ],
    [
        "name" => 'Tiago',
        'address' => [
            'street' => 'Rua Xyz, 678',
        ],
        'phones' => ['9999-678', '888-678']
    ],
];

$total = count($pessoas);
for ($index = 0; $index < $total; $index++)
{
    $phone = $pessoas[$index]["phones"][0];
    echo "Name: {$pessoas[$index]['name']} | Phone: {$phone} <br>";
}
