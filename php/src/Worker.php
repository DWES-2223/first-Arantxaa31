<?php

abstract class Worker extends Person{
    protected $telefonos = array();

    public function __construct($nombre, $apellidos, $edat, $telefonos)
    {
        parent::__construct($nombre, $apellidos, $edat);
        $this->telefonos = $telefonos;
    }

    public function anyadirTelefono(int $telefono): void
    {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string
    {
        return implode(',', $this->telefons);
    }

    public function vaciarTelefonos(): void
    {
        $this->telefons = array();
    }

    /**
     * @return mixed
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }


    public static function toHtml(Person $p): string
    {
        return "<p>" . $p->getNombreCompleto() . "</p>";
    }

    public function __toString(): string
    {
        $parragraf = parent::__toString() . "<ul>";
        foreach ($this->getTelefonos() as $telefono) {
            $parragraf .= "<li>$telefono</li>";
        }
        return $parragraf . "</ul>";
    }

    abstract function calcularSueldo(): float;

    public function debePagarImpuestos()
    {
        return $this->calcularSueldo() > 3333;
    }
}