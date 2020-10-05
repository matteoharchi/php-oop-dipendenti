<?php
require_once __DIR__ . "/classes/Dipendente.php";
require_once __DIR__ ."/classes/Responsabile.php";
require_once __DIR__ ."/trait/Consultabile.php";

// dipendenti
$dipendente1 = new Dipendente("Massimo", "Volpi", 3212, "sì");
var_dump($dipendente1);

$dipendente2 = new Dipendente("Giulia", "Rossi", 3215, "sì");
var_dump($dipendente2);

$dipendente3 = new Dipendente("Gastone", "Morricone", 3223, "sì");
var_dump($dipendente3);

// responsabili
$responsabile1 = new Responsabile("Guido", "Mancini", 2049, "Ufficio Legale", "no");
var_dump($responsabile1);

$responsabile2 = new Responsabile ("Pietro", "Gomez", 5903, "Contabilità", "no");
var_dump($responsabile2);

$responsabile3 = new Responsabile ("Giovanni", "Bianchi", 6463, "Distribuzione", "no");
var_dump($responsabile3);
