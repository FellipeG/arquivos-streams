<?php

$arquivoLinhas = file('lista-cursos.txt');

$arquivoCsv = fopen('lista-cursos.csv', 'w');

foreach($arquivoLinhas as $linha) {
    $linha = explode(':', $linha);

    $linha = array_map(function ($coluna) {
        return trim($coluna);
    }, $linha);

    fputcsv($arquivoCsv, $linha, ';');
}
