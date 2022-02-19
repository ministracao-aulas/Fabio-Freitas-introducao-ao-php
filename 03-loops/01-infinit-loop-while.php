<?php

function logThis($toLog)
{
    $toLog = json_encode($toLog);
    file_put_contents('log.log', date('Y-m-d H:i:s')." - {$toLog}\n\n", FILE_APPEND);
}

// # Quando eu quero
// while(true)
// {
//     logThis('busca todos os boletos pagos no último minuto');
//     sleep(3);
// }

$increment = 1;
$parar     = false;
// Quando eu não quero
while($parar != true)
{
    logThis('busca todos os boletos pagos no último minuto');
    sleep(1);
    $parar = $increment >= 5;
    // $increment++;//Supondo que eu não incremente o valor
}

//

$existeDados = true;
while($existeDados)
{
    $dados = 'busca dados no banco';
    $existeDados = count($dados) > 0;
}

do {
    $dados = 'busca dados no banco';
    $existeDados = count($dados) > 0;
} while ($existeDados);
