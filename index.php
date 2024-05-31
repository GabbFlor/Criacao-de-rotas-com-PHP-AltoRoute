<?php
require 'vendor/autoload.php';

$base_path = '/php/Teste-rotas-em-php/RoteamentoAutoRouter';

$router = new AltoRouter();
$router->setBasePath($base_path);

$router->map('GET', '/', function() {
    require __DIR__ . '/routes/home.php';
});

$router->map('GET', '/about', function() {
    require __DIR__ . '/routes/about.php';
});

$router->map('GET', '/user/[i:id]', function($id) {
    require __DIR__ . '/routes/user.php';
});

$match = $router->match();

if ($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    http_response_code(404);
    echo '404 - página não encontrada';
}