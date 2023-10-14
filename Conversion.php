<?php


class Conversion{

    public $dolares = 34.88;
    public $bolivares;
    public $conversor_bolivar;

    public function __construct($args = [])
    {
        $this->bolivares = $args['cantidad'];
    }

    public function conversion(){

        $resultado = round($this->dolares * $this->bolivares, 2);

        return $resultado;
    }


}

?>