<?php
namespace Controllers;

class HomeController {
    public function index() {
        echo "<h1>Bem-vindo ao novo site André LPDZ!</h1>";
        echo "<p>Este conteúdo está sendo carregado via MVC.</p>";
    }

    public function sobre() {
        echo "<h1>Sobre mim</h1>";
        echo "<p>Aqui vai a sua biografia e história.</p>";
    }
}
