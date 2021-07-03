<?php

namespace App\Http\Livewire;

use App\Models\Cliente;
use Livewire\Component;

class EditCliente extends Component
{
    public $open = false;
    public $cliente;

    protected $rules = [
        'cliente.nombre' => 'required',
        'cliente.dinero' => 'required|integer',
    ];

    public function mount(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function save()
    {
        $this->validate();

        $this->cliente->save();

        $this->reset(['open']);

        $this->emitTo('user-moneys', 'render');
        $this->emit('alert', 'Su credito se acrualizo');
    }

    public function render()
    {
        return view('livewire.edit-cliente');
    }
}
