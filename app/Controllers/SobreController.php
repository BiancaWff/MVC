<?php

namespace App\Controllers;

class SobreController extends Controller {
    public function index() {
        // Renderiza a view da página Sobre
        $this->view('sobre/index');
    }
}
