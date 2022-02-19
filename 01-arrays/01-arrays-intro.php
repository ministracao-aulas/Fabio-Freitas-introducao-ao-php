<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
        .reload-container{
            margin-top: 8rem;
            padding: 8rem;
        }
        .reload{
            padding: 1rem;
            background-color: gray;
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $itens = [
        "1L de leite",
        "1kg de açucar",
        "1kg de farinha",
        "1dz de ovo",
        "1kg de trigo",
        "1pct de fermento",
        "1kg de sal",
        "1L de óleo",
        "1kg de farinha de trigo",
    ];
    // echo $itens[0];

    $pessoa = [
        'nome'         => 'Pedro',
        'endereco_rua' => 'Rua das Flores',
        'email'        => 'pedro@gmail.com',
        'cpf'          => '123456789',
        'endereco_num' => '123',
        41 => 'Sao Paulo',
        0 => 'Centro',
        '12345-678',
        'Brasil',
    ];

    // array_push($pessoa, 102);
    $pessoa[] = 102;
    $pessoa[0] = 'Alfavile';
    $pessoa[8] = 'Alguma coisa';
    $pessoa['telefone'] = 984402684;
    $pessoa['cpf'] = 789456878;
    // unset($pessoa['telefone']);
    // unset($pessoa);

    // echo "Rua: {$pessoa['endereco_rua']}";
    // echo "Bairro: {$pessoa[0]}";
    // echo "Cidade: {$pessoa[41]}";
    // echo "CEP: {$pessoa[43]}";
    // echo "Peso: {$pessoa[44]}";
    // echo "Peso: {$pessoa[44]}";
    echo "Valor: {$pessoa['telefone']}";
    ?>

    <div class="reload-container">
        <a href=""
            class="reload"
        >
            Reload
        </a>
    </div>
</body>
</html>
