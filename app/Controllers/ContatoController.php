<?php

namespace App\Controllers;

class ContatoController extends Controller {
    public function index() {
        // Renderiza a view da página de Contato
        $this->view('contato/index');
    }
}
