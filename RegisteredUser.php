<?php
require_once __DIR__ . '/Utente.php';

class Registered extends Utente {
    
    public function __construct($_nome, $_mail) {
        $this->nome = $_nome;
        $this->email = $_mail;
    }

    // override
    public $sconto = 20;
}
?>