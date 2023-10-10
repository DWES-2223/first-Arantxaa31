<?php

class Enterprise implements JSerializable {
    protected $workers = array();

    public function __construct(
        protected $nom,
        protected $direccio
    ){}

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getDireccio()
    {
        return $this->direccio;
    }
    public function addWorker(Worker $t){
        array_push($this->workers,$t);
    }
    public function listWorkersHtml() : string{
        $lista = '<div>';
        foreach ($this->workers as $work){
            $lista .= Worker::toHtml($work);
        }
        $lista .= '</div>';
        return $lista;
    }
    public function getCosteNominas(): float{
        $total = 0;
        foreach ($this->workers as $work){
            $total += $work->calcularSueldo();
        }
        return $total;
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