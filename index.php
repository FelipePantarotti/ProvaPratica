<?php

    session_start();

    require "robo.php";

    $arquivo = "robos.json";

    function lerRobos($arquivo){
        if (!file_exists($arquivo)){
            return [];
        }
        $dados = json_decode(file_get_contents($arquivo),true);
        if (!is_array($dados)){
            return [];
        }
        return $dados;
    }

    function salvarRobos($arquivo, $robo){
        file_put_contents($arquivo,json_encode($robo, JSON_PRETTY_PRINT || JSON_UNESCAPED_UNICODE));   
    }

    $robos = lerRobos($arquivo);
    $mensagem = "";
    $tipoMensagem = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $acao = $_POST["acao"];

        if ($acao === 'cadastrar'){
            $nome = trim($_POST['nome']);
            $modelo = $_POST['modelo'];
        }
        if ($nome === '' || $modelo === ''){
            $mensagem = "Preencha todos os campos";
            $tipoMensagem = "Erro";
        }
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>PROVA</title>
</head>
<body>
    <div class="tabela">
        <div class="tipo">
            <h1>TIPOS DE ROBÔS</h1>
            <h2>MODELOS</h2>
            <ul>
                <li>Explorador</li>
                <li>Engenheiro</li>
                <li>Defensor</li>
            </ul>
        </div>

        <div class="energia">
            <h2>ENERGIA INICIAL</h2>
            <ul>
                <li>100</li>
                <li>120</li>
                <li>150</li>
            </ul>
        </div>

        <div class="potencia">
            <h2>POTÊNCIA</h2>
            <ul>
                <li>20</li>
                <li>15</li>
                <li>30</li>
            </ul>
        </div>

        <div class="funcao">
            <h2>FUNÇÃO</h2>
            <ul>
                <li>Investigar planetas</li>
                <li>Reparar equipamentos</li>
                <li>Proteger a estação</li>
            </ul>
        </div>
    </div>

    <a href="estacao.php">CADASTRO</a>
</body>
</html>