<?php
abstract class Person {
    const EDAD_LIMITE = 66;
    protected static  $limite_edat = self::EDAD_LIMITE;
    protected $nombre;
    protected $apellidos;
    protected $edad;

    public function __construct($nombre, $apellidos, $edat) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edat;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    public function getNombreCompleto(): string{
        return $this->getNombre().' '.$this->getApellidos();
    }
    public function estaJubilado(): bool{
        return $this->edat > self::$limite_edat;
    }
    public function __toString(): string{
        return "<p>".$this->getNombre()." ".$this->getApellidos()."</p>";
    }
    public static function modificaLimite(int $limite){
        self::$limite_sueldo = $limite;
    }

    abstract public static function toHtml(Person $p): string;

}