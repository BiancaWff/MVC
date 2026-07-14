<?php

namespace App\Controllers;

class HomeController extends Controller {
    public function index() {
        // Renderiza a view da página inicial (Home)
        $this->view('home/index');
    }
}
