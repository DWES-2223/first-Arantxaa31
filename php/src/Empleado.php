<?php

class Empleado extends Persona8 {
    protected $telefons = array();
    protected $sou;

    public function anyadirTelefono(int $telefono) : void{
        $this->telefons[] = $telefono;
    }
    public function listarTelefonos(): string{
        return implode(',', $this->telefons);
    }
    public function vaciarTelefonos(): void{
        $this->telefons = array();
    }
    public function debePagarImpuestos(): bool{
        return $this->sou >3333;
    }

    /**
     * @return mixed
     */
    public function getTelefons()
    {
        return $this->telefons;
    }

    /**
     * @return mixed
     */
    public function getSou()
    {
        return $this->sou;
    }

    /**
     * @param mixed $sou
     */
    public function setSueldo($sou): void
    {
        $this->sou = $sou;
    }

    public static function toHtml(Empleado $emp): string{
        $informacion = '';
        $informacion .= '<p>'.$emp->getNombreCompleto().'</p><ul>';
        foreach ($emp->getTelefons() as $tel){
            $informacion .= '<li>' . $tel . '</li>';
        }
        $informacion .= '</ul>';
        return $informacion;
    }
}