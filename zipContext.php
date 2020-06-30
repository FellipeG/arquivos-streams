<?php

$context = stream_context_create([
    'zip' => [
        'password' => '654321'
    ]
]);

echo file_get_contents('zip://cursos-senha.zip#cursos-php.txt', false, $context);