<?php

class Manager extends Worker implements JSerializable {

    protected $salario;

    public function __construct($salari = 0 ,$nombre = '', $apellidos = '', $edat = '', $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edat, $telefonos);
        $this->salario = $salari;
    }

    public function calcularSueldo():float{
        return $this->salario + ($this->salario*$this->edad)/100;
    }
    public function __toString(): string {
        return parent::__toString();
    }
    public function toJSON(): string{
        $mapa = array();
        foreach ($this as $clave => $valor){
            $mapa[$clave] = $valor;
        }
        return json_encode($mapa);
    }
    public function toSerialize(): string{
        return serialize($this);
    }
}