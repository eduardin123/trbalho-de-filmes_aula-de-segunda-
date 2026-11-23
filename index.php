<?php
require_once __DIR__ . '/controller/filmeController.php';

$apiKey = "97cd87887688a544a5c6a427800f4bdc";
$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['importar'])) {
    processarImportacao($apiKey);
    $mensagem = "Importação concluída!";
}

$filmes = obterFilmes();

require_once __DIR__ . '/view/filmeView.php';