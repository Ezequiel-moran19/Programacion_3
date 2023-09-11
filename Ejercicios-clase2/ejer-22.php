<?php 

class Garage{

    private $_razonSocial;
    private $_precioPorHora;
    private $_auto = array();

    public function __construct($rz, $precio) {
        $this->_razonSocial = $rz;
        $this->_precioPorHora = $precio;
    }

    public function MostrarGarage(){
        echo "Razon social: ".$this->_razonSocial."<br>";
        echo "Precio por hora: ".$this->_precioPorHora."<br>";
        foreach ($this->_auto as $value) {
            Auto::MostrarAuto($value);
        }
    }

    public function Equals($auto) {
        foreach ($this->_auto as $garageAuto) {
            if ($auto->Equals($garageAuto)) {
                return true;
            }
        }
        return false;
    }

    public function Add($auto){
        if (!$this->Equals($auto)) {
            $this->_auto[] = $auto;
        }
    }

    public function Remove($auto){
        $key = array_search($auto, $this->_auto, true);
        if ($key !== false) {
            unset($this->_auto[$key]);
            $this->_auto = array_values($this->_auto);
            echo "El auto se ha quitado del garage "."<br>";
        }else {
            echo "El auto no esta en el garage "."<br>";
        }
    }

}

?>