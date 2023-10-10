<?php

class Employee extends Worker implements  JSerializable {

    protected $horasTrabajadas;
    protected $precioPorHora;

    public function __construct($horasTrabajadas = 0, $precioPorHora = 0, $nombre = '', $apellidos = '', $edat = '', $telefonos = []) {
        parent::__construct($nombre, $apellidos, $edat, $telefonos);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->precioPorHora = $precioPorHora;
    }
    /**
     * @return int
     */
    public function getHorasTrabajadas(): int
    {
        return $this->horasTrabajadas;
    }

    /**
     * @param int $horasTrabajadas
     */
    public function setHorasTrabajadas(int $horasTrabajadas): void
    {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    /**
     * @return float
     */
    public function getPrecioPorHora(): float
    {
        return $this->precioPorHora;
    }

    /**
     * @param float $precioPorHora
     */
    public function setPrecioPorHora(float $precioPorHora): void
    {
        $this->precioPorHora = $precioPorHora;
    }

    public function calcularSueldo():float{
        return $this->horasTrabajadas * $this->precioPorHora;
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