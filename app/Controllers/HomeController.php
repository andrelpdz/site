<?php
namespace Controllers;

class HomeController {
    
    // Função para renderizar a view com header e footer
    private function view($nomePagina) {
        require_once "../app/Views/partials/header.php";
        require_once "../app/Views/安Views/{$nomePagina}.php";
        require_once "../app/Views/partials/footer.php";
    }

    public function index() {
        $this->view('dev');
    }

    public function app() {
        $this->view('app');
    }

    public function ministerio() {
        $this->view('ministerio');
    }
}
