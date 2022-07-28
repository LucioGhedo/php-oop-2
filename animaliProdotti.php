<?php

class prodottiAnimali {
    public $nome;

    public $prezzo;

    public $marca;

    public $recensioni;

    public function __construct($_nome, $_prezzo, $_marca) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
    }
}
?>