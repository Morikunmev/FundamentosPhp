<?php 
    namespace App\Clases;
    class Saiyajin{
        private string $nombre;
        private int $nivel_pelea;
        public string $clase = "Saiyayin";
        public static $cabello = "Negro";

        const VELOCIDAD = "Normal";

        public function __construct($nombre, $nivel_pelea){   
            $this->nombre = $nombre;
            $this->nivel_pelea=$nivel_pelea;
        }

        public static function MostrarColorCabello(){
            return "Tengo el cabello de color ".Saiyajin::$cabello;
        }
        public function Saludar($texto="Hola soy "):string{
            return "Hola soy ".$this->nombre." ".$this->NivelDePelea();
        }
        public function NivelDePelea(){
            return $this -> nombre." tiene un nivel de pelea de ".$this->nivel_pelea. " y pertenece a la clase ".$this->clase;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }
        public function getNivelPelea(){
            return $this->nivel_pelea;
        }
        public function setNivelPelea($nivel_pelea){
            $this->nivel_pelea=$nivel_pelea;
        }
    }