<?php
$nomes = [
    'Pedro',
    'Marcos',
    'Fabio',
    'Joao',
];

/*
Exemplo
- Fulano
- Siclano
*/

$i = 0;

while ($i < count($nomes)) {
    echo "- {$nomes[$i]} <br>";
    $i++;
}
