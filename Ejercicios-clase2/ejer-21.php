<?php
class Auto {

    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    // Constructor con valores predeterminados
    public function __construct($marca, $color, $precio = null, $fecha = null) {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_precio = $precio;
        $this->_fecha = $fecha;
    }
    // Métodos getter para obtener los atributos
    public function getColor() {
        return $this->_color;
    }
    public function getPrecio() {
        return $this->_precio;
    }

    public function getMarca() {
        return $this->_marca;
    }

    public function getFecha() {
        return $this->_fecha;
    }
    public function AgregarImpuestos($impuesto){
        if ($this->_precio != null) {
             $this->_precio += $impuesto;
        }
    }
    public static function MostrarAuto($auto1){
        echo "Color: ". $auto1->_color . "<br>";
        echo "Precio: ". $auto1->_precio . "<br>";
        echo "Marca: ". $auto1->_marca . "<br>";
        echo "Fecha: ". ($auto1->_fecha !== null ? $auto1->_fecha->format('Y-m-d') : "No especificada") . "<br>";
    }
      // Método de instancia para comparar dos objetos Auto por marca
    public function Equals($otroAuto) {
        return $this->_marca === $otroAuto->_marca;
    }
    
    public static function Add($auto1, $auto2){
        if($auto1->_marca === $auto2->_marca && $auto1->_color == $auto2->_color){
            return $auto1->_precio + $auto2->_precio;
        }else{
            echo "No se pueden sumar los autos: no son de la misma marca y color"."<br>";
            return 0;
        }
    }
    // Método para representar el objeto como una cadena
    public function __toString() {
        $str = "Auto: Marca = " . $this->_marca . ", Color = " . $this->_color;
        if ($this->_precio !== null) {
            $str .= ", Precio = " . $this->_precio;
        }
        if ($this->_fecha !== null) {
            $str .= ", Fecha = " . $this->_fecha->format('Y-m-d');
        }
        return $str;
    }
}
?>







