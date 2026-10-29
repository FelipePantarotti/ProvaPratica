<?php

    if ($_POST["REQUEST_METHOD"]){
        $modelo = ["modelo"];
        $energia = ["energia"];
        $funcao = ["funcao"];
        $potencia = ["potencia"];

        if ($energia === "" || $potencia === ""){
            echo "Preencha os campos obrigatórios";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estação de Robôs</title>
</head>
<body>
    <h1>Central De Robôs</h1>
    <label>Modelo</label>
    <select name="modelo" id="modelo">
        <option value="explorador">Explorador</option>
        <option value="engenheiro">Engenheiro</option>
        <option value="defensor">Defensor</option>
    </select>

    <label>Energia Incial</label>
    <input type="number" id="energia" name="energia">

    <label>Potência</label>
    <input type="number" id="potencia" name="potencia">

    <label>Função</label>
    <select name="funcao" id="funcao">
        <option value="investigar">Investigar planetas</option>
        <option value="reparar">Reparar equipamentos</option>
        <option value="proteger">Proteger a estação</option>
    </select>

    <button type="submit">Registrar</button>
</body>
</html>