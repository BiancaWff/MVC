<?php
// Habilita exibição de erros (útil para ambiente de desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Inclusão manual dos Controladores (em um projeto maior, usaríamos um Autoload como o do Composer)
require_once __DIR__ . '/../app/Controllers/Controller.php';
require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/VagasController.php';
require_once __DIR__ . '/../app/Controllers/EmpresasController.php';
require_once __DIR__ . '/../app/Controllers/SobreController.php';
require_once __DIR__ . '/../app/Controllers/ContatoController.php';

// Captura a URI requisitada
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Remove o caminho do script caso o servidor esteja rodando em subpasta
$script_name = dirname($_SERVER['SCRIPT_NAME']);
if ($script_name !== '/' && $script_name !== '\\') {
    $path = str_replace($script_name, '', $path);
}

$path = trim($path, '/');

// Roteamento
switch ($path) {
    case '':
    case 'home':
        $controller = new \App\Controllers\HomeController();
        $controller->index();
        break;
    case 'vagas':
        $controller = new \App\Controllers\VagasController();
        $controller->index();
        break;
    case 'empresas':
        $controller = new \App\Controllers\EmpresasController();
        $controller->index();
        break;
    case 'sobre':
        $controller = new \App\Controllers\SobreController();
        $controller->index();
        break;
    case 'contato':
        $controller = new \App\Controllers\ContatoController();
        $controller->index();
        break;
    default:
        http_response_code(404);
        echo "<h1>404 - P&aacute;gina n&atilde;o encontrada</h1>";
        break;
}
