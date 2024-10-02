<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Proveedor;

class Proveedors extends Component
{
    public $proveedores;

    public function render()
    {
        $this->$proveedores = Proveedor::all();
        return view('livewire.proveedors');
    }
}
