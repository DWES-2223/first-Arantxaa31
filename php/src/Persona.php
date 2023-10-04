<?php

class Persona{
    public function __construct(
        protected string $nom = '',
        protected string $cognoms = '',
        protected int $edat = 0,
    ) {}

    public function getNombre(): string
    {
        return $this->nom;
    }

    public function setNombre(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getApellidos(): string
    {
        return $this->cognoms;
    }

    public function setApellidos(string $cognoms): void
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
        return $this->edat >=65;
    }

}