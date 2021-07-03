<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class CreateCliente extends Component
{

    public $open = false;

    public $nombre, $dinero;

    protected $rules = [
        'nombre' => 'required',
        'dinero' => 'required|integer',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        Cliente::create([
            'nombre' => $this->nombre,
            'dinero' => $this->dinero
        ]);

        $this->reset(['open', 'nombre', 'dinero']);

        $this->emitTo('user-moneys', 'render');
        $this->emit('alert', 'El cliente se creo satisfactoriamente');
    }

    public function render()
    {
        return view('livewire.create-cliente');
    }
}
