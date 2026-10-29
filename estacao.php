<?php

    if ($_POST["REQUEST_METHOD"]){
        $modelo = ["modelo"];
        $energia = ["energia"];
        $funcao = ["funcao"];
        $potencia = ["potencia"];

    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estacao.css">
    <title>Estação de Robôs</title>
</head>
<body>

    <div>
        <h1>Central De Robôs</h1>

        <label>Modelo</label>
        <select name="modelo" id="modelo">
            <option value="explorador">Explorador</option>
            <option value="engenheiro">Engenheiro</option>
            <option value="defensor">Defensor</option>
        </select>

        <label>Energia Incial</label>
        <select name="energia" id="energia">
            <option value="100">100</option>
            <option value="120">120</option>
            <option value="150">150</option>
        </select>

        <label>Potência</label>
        <select name="potencia" id="potencia">
            <option value="20">20</option>
            <option value="15">15</option>
            <option value="30">30</option>
        </select>

        <label>Função</label>
        <select name="funcao" id="funcao">
            <option value="investigar">Investigar planetas</option>
            <option value="reparar">Reparar equipamentos</option>
            <option value="proteger">Proteger a estação</option>
        </select>

        <button type="submit">Registrar</button>

        <a href="index.php">Voltar para tabela</a>
    </div>
</body>
</html>