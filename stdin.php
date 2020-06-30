<?php

echo "Digite um texto: ";

$texto = trim(fgets(STDIN));

file_put_contents('cursos-php.txt', "\n{$texto}", FILE_APPEND);
