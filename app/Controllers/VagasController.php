<?php

namespace App\Controllers;

class VagasController extends Controller {
    public function index() {
        // Renderiza a view da página de Vagas
        $this->view('vagas/index');
    }
}
