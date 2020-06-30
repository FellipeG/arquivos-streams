<?php

$arquivo = fopen('zip://cursos.zip#cursos/lista-cursos.txt', 'r');

// Manda direto pra tela
stream_copy_to_stream($arquivo, STDOUT);

// Também podemos escrever dessa forma
fwrite(STDOUT, "\nTeste");
