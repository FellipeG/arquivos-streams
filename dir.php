<?php

$dir = dir('.');

// Exibe o caminho do diretório
echo $dir->path . PHP_EOL;


// Lista os arquivos e pastas do diretório
while ($arquivo = $dir->read()) {
    echo $arquivo . PHP_EOL;
}

