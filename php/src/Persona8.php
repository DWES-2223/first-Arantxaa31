<?php
class Persona8 {
    const LIMITE_EDAT = 66;
    protected static  $limite_edat = self::LIMITE_EDAT;
    public function __construct(
        protected string $nom = '',
        protected string $cognoms = '',
        protected int $edat = 25,
    ) {}

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getCognoms(): string
    {
        return $this->cognoms;
    }

    public function setCognoms(string $cognoms): void
    {
        $this->cognoms = $cognoms;
    }

    public function getEdat(): int
    {
        return $this->edat;
    }

    public function setEdat(int $edat): void
    {
        $this->edat = $edat;
    }
    public  function  getNombreCompleto():string{
        return $this->nom . ' '. $this->cognoms;
    }
    public function estaJubilado():bool{
        return $this->edat >= self::LIMITE_EDAT;
    }
    public static function modificaLimite(int $limite){
        self::$limite_edat = $limite;
    }
}