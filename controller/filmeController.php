<?php
require_once __DIR__ . '/../model/filmeModel.php';

function processarImportacao($api_key) {
    importarFilmesDaAPI($api_key);
}

function obterFilmes() {
    return listarFilmes();
}