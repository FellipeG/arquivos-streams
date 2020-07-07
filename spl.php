<?php

$arquivo = new SplFileObject('lista-cursos.csv');

while (!$arquivo->eof()) {
    $linha = $arquivo->fgetcsv(';');
    echo implode(' : ', $linha) . PHP_EOL;
}

$date =  new DateTime();
$date->setTimestamp($arquivo->getCTime());

echo "Criado em: {$date->format('d/m/Y')}\n";
