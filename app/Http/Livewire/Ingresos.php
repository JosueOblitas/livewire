<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingreso;

class Ingresos extends Component
{

    //Definimos unas variables
    public $ingresos, $descripcion, $cantidad, $id_ingreso;
    public $modal = false;
    public function render()
    {
        $this->ingresos = Ingreso::all();
        return view('livewire.ingresos');
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal()
    {
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->descripcion = '';
        $this->cantidad = '';
        $this->id_ingreso = '';
    }
}