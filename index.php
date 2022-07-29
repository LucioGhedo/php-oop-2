<?php 
require_once __DIR__ . '/cibo.php';
require_once __DIR__ . '/giochi.php';
require_once __DIR__ . '/UtenteAnonimo.php';
require_once __DIR__ . '/RegisteredUser.php';

$pappa1 = new Cibo('Bocconcini pollo', 45, 'BuonAMarcA', 'Cani');
$pappa2 = new Cibo('Tonno e tacchino', 15, 'BuonAMarcA', 'Gatti');
$pappa3 = new Cibo('Snack croccanti', 15, 'MenoBuona', 'Gatti');

$gioco1 = new Giochi('Tacchino di gomma', 5, 'GiochiPerAnimali', 'Cani');
$gioco2 = new Giochi('Topo finto', 2, 'GiochiPerAnimali', 'Gatti');

$lucio = new Registered('lucio', 'lucio@mail.it');
$lucio->addProd($pappa2);
$lucio->addProd($pappa3);
$lucio->addProd($gioco2);

$lucio->saldo = 50;
var_dump($lucio);
try {
    if($lucio->pay()) {
        echo "<h2>Acquisto completato con successo.</h2>";
    }
} catch(Exception $e) {
    error_log($e->getMessage());
    echo "Operazione non riuscita. Controlla il saldo e riprova";
}

$anon1 = new AnonUser();
$anon1->addProd($gioco2);
$anon1->addProd($pappa1);
var_dump($anon1);
try {
    if($anon1->pay()) {
        echo "<h2>Acquisto completato con successo.</h2>";
    }
} catch(Exception $e) {
    error_log($e->getMessage());
    echo "Operazione non riuscita. Controlla il saldo e riprova";
}
?>