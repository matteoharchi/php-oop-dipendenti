<?php
require_once __DIR__ ."/../trait/Consultabile.php";
class Dipendente{
    private $name;
    private $surname;
    private $idNumber;
    use Consultabile; 

    // controllo inserimento dati
    public function __construct($_name, $_surname, $_idNumber, $_consultabile){
        if (empty($_name)){
            die("Nome non indicato");
        };
        $this->name= $_name;
        if (empty($_surname)){
            die ("Cognome non indicato");
        }
        $this->surname= $_surname;
        if (empty($_idNumber)){
            die("Numero ID non valido");
        }
        $this->idNumber= $_idNumber;
        $this->consultabile = $_consultabile;
        $this->consultabile($_consultabile);
    }

}