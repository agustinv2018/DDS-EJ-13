<?php

class PropiedadInmobiliaria
{
    public $Id;
    public $Direccion;
    public $MetrosCuadrados;
    public $Ciudad;
    public $Valor;

    function __construct($id, $dire, $mc, $ciudad, $valor)
    {
        $this->Id = $id;
        $this->Direccion = $dire;
        $this->MetrosCuadrados = $mc;
        $this->Ciudad = $ciudad;
        $this->Valor = $valor;
    }

    public function MostrarDatos()
    {
        echo 'id: ' . $this->Id . '<br>';
        echo 'Direccion: ' . $this->Direccion . '<br>';
        echo 'Metros Cuadrados: ' . $this->MetrosCuadrados . '<br>';
        echo 'Ciudad: ' . $this->Ciudad . '<br>';
        echo 'Valor: ' . $this->Valor . '<br>';
        
    }
}
