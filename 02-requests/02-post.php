<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <div><a href="">Reload</a></div>
    <form action="02-post.php?produto=123" method="post">
        <input type="text"      placeholder="cliente"    name="cliente"><br>
        <input type="text"      placeholder="produto 1"  name="produtos[1][nome]">
        <input type="number"    placeholder="qtd 1"      name="produtos[1][qtd]"><br>
        <input type="text"      placeholder="produto 2"  name="produtos[2][nome]">
        <input type="number"    placeholder="qtd 2"      name="produtos[2][qtd]"><br>
        <input type="text"      placeholder="produto 3"  name="produtos[3][nome]">
        <input type="number"    placeholder="qtd 3"      name="produtos[3][qtd]"><br>
        <input type="text"      placeholder="produto 4"  name="produtos[4][nome]">
        <input type="number"    placeholder="qtd 4"      name="produtos[4][qtd]"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
<?php

echo "<pre>";
var_export($_POST);
echo "\n";
var_export($_GET);
echo "</pre>";
