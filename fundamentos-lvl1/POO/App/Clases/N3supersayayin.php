<?php 
    namespace App\Clases;
    class SuperSaiyayin extends Saiyajin{
        public string $clase = "Super Saiyayin";

        public function Transformacion(){
            if($this->getNivelPelea()>=1500){
                $texto=$this->getNombre()." Se transformo en ".$this->clase;
            }else{
                $texto=$this->getNombre()." No se transformo en ".$this->clase;
            }
            return $texto;
        }
        public static function NuevoMetodo(){
            return parent::VELOCIDAD;
        }
    }