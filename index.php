<?php
require_once __DIR__ . "/classes/Dipendente.php";
require_once __DIR__ ."/classes/Responsabile.php";
require_once __DIR__ ."/trait/Consultabile.php";

// dipendenti
try{
    $dipendente1 = new Dipendente("Giovanni", "Volpi", 3212, "sì");
}catch(Exception $e){
    echo "Attenzione: " .$e->getMessage();
}
echo $dipendente1->__toString();

try{
    $dipendente2 = new Dipendente("Giulia", "Rossi", 3215, "sì");
}catch(Exception $e){
    echo "Attenzione: " .$e->getMessage();
}
echo $dipendente2->__toString();

try{
    $dipendente3 = new Dipendente("Gastone", "Morricone", 3223, "sì");
}catch(Exception $e){
    echo "Attenzione: " .$e->getMessage();
}
echo $dipendente3->__toString();

// responsabili

try {
   $responsabile1 = new Responsabile("Guido", "Mancini", 2049, "Ufficio Legale", "sì");
} catch (Exception $e) {
   echo "Attenzione: " .$e->getMessage(); 
}
echo $responsabile1->__toString();
try {
   $responsabile2 = new Responsabile ("Pietro", "Gomez", 5903, "Contabilità", "no");
} catch (Exception $e) {
   echo "Attenzione: " .$e->getMessage(); 
}
echo $responsabile2->__toString();
try {
   $responsabile3 = new Responsabile ("Giovanni", "Bianchi", 6463, "Distribuzione", "sì");
} catch (Exception $e) {
   echo "Attenzione: " .$e->getMessage(); 
}
echo $responsabile3->__toString();
