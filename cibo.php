<?php
require_once __DIR__ . '/animaliProdotti.php';

class Cibo extends prodottiAnimali {

    public $razzaAnimale;

    // override
    public function __construct($_nome, $_prezzo, $_marca, $_razzaAnimale) {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->marca = $_marca;
        $this->razzaAnimale = $_razzaAnimale;
    }
}
?>