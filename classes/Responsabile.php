<?php
require_once __DIR__ ."/../trait/Consultabile.php";
class Responsabile extends Dipendente{
    protected $areaCompetenza;

    public function __construct($_name, $_surname, $_idNumber, $_areaCompetenza, $_consultabile){
        parent::__construct($_name, $_surname, $_idNumber, $_consultabile);
        if (empty($_areaCompetenza)){
            die("Indicare area di competenza");
        };
        $this->areaCompetenza = $_areaCompetenza;
// da risportare consultabilità anche qui, altrimenti non copre area di competenza. 
        $this->consultabile = $_consultabile;
        $this->consultabile($_consultabile);
    }
        public function __toString(){
        return "<br>Nome:" .$this->name
        ."<br>Cognome: " .$this->surname
        ."<br> ID: " .$this->idNumber .
        "<br> Area di competenza: " .$this->areaCompetenza
        ."<br>";
    }
}