<?php

namespace App\Controllers;

class Controller {
    /**
     * Renderiza uma view e passa os dados
     */
    protected function view($view, $data = []) {
        // Extrai o array associativo em variáveis
        extract($data);
        
        // Inclui o arquivo da view correspondente
        $file = __DIR__ . "/../Views/{$view}.php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            die("View {$view} não encontrada!");
        }
    }
}
