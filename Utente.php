<?php
class Utente {
    public $nome;
    public $email;
    public $sconto = 0;
    public $saldo = 0;

    protected $prodottiScelti = [];

    public function addProd($prodotto) {
        $this->prodottiScelti[] = $prodotto;
    }

    public function calcPrice() {
        $sum = 0;
        foreach($this->prodottiScelti as $singleProd) {
            $sum += $singleProd->prezzo;
        }

        $sum -= $sum * $this->sconto / 100;
        return $sum;
    }

    public function pay() {
        $priceToPay = $this->calcPrice();
        
        if($this->saldo < $priceToPay) {
            die('Insufficent fund');
        } else {
            return 'Payment OK';
        }
    }
}
?>