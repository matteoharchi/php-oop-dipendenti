<?php
trait Consultabile{
    public $consultabile;

    public function consultabile($_answer){
        if($_answer == "no"){
            $this->name = "Non consultabile";
            $this->surname = "Non consultabile";
            $this->idNumber="Non consultabile";
            $this->areaCompetenza="Non consultabile";
        }
    }
}