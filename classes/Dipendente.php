<?php
require_once __DIR__ ."/../trait/Consultabile.php";
class Dipendente{
    protected $name;
    protected $surname;
    protected $idNumber;
    use Consultabile; 

    // controllo inserimento dati
    public function __construct($_name, $_surname, $_idNumber, $_consultabile){
        if (empty($_name)){
            throw new Exception ("Inserire nome");
        };
        $this->name= $_name;
        if (empty($_surname)){
            throw new Exception ("Inserire cognome");
        }
        $this->surname= $_surname;
        if (empty($_idNumber)){
            throw new Exception ("Numero ID non valido");
        }
        $this->idNumber= $_idNumber;
        if (empty($_consultabile)) {
            throw new Exception ("Specificare se consultabile o meno");
        }
        $this->consultabile = $_consultabile;
        $this->consultabile($_consultabile);
    }
    public function __toString(){
        return "<br>Nome:" .$this->name
        ."<br>Cognome: " .$this->surname
        ."<br> ID: " .$this->idNumber ."<br>";
    }

}