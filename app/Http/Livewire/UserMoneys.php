<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;
use Livewire\withPagination;

class UserMoneys extends Component
{
    use withPagination;

    public $search = '';
    public $sort = 'id';
    public $dirrection = 'desc';

    protected $listeners = ['render'];

    public $cant = '10';

    protected $queryString = [
        'cant' => ['except' => '10'], 
        'sort' => ['except' => 'id'], 
        'dirrection' => ['except' => 'desc'], 
        'search' => ['except' => '']
    ];

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $clientes = Cliente::where('nombre', 'like', '%' . $this->search . '%')
                                // ->orWhere('dinero', 'linke', '%' . $this->search . '%')
                                ->orderBy($this->sort, $this->dirrection)
                                ->paginate($this->cant);

        return view('livewire.user-moneys', compact('clientes'));
    }
    public function order($sort){
        if ($this->sort == $sort) {
            if ($this->dirrection == 'desc') {
                $this->dirrection = 'asc';
            } else {
                $this->dirrection = 'desc';
            }
            
        } else {
            $this->sort = $sort;
            $this->dirrection = 'asc';
        }
    }
}
