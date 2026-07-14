<?php

namespace App\Controllers;

class EmpresasController extends Controller {
    public function index() {
        // Renderiza a view da página de Empresas
        $this->view('empresas/index');
    }
}
