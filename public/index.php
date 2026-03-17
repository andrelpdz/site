<?php

// Exibir erros para desenvolvimento (desative em produção)
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Autoload manual simples (depois você pode usar o Composer)
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/../app/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Captura a URL enviada pelo .htaccess
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$url = rtrim($url, '/');
$url = explode('/', $url);

// Roteamento Simples (O Coração do MVC)
$controllerName = ucfirst($url[0]) . 'Controller';
$methodName = isset($url[1]) ? $url[1] : 'index';

// Verifica se a classe existe na pasta app/Controllers
$controllerPath = "Controllers\\$controllerName";

if (class_exists($controllerPath)) {
    $controller = new $controllerPath();
    
    // Verifica se o método existe dentro da classe
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    } else {
        echo "Erro 404: Método não encontrado.";
    }
} else {
    echo "Erro 404: Página não encontrada.";
}
