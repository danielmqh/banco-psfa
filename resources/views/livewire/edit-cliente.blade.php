<div>
    <a class="btn btn-green" wire:click="$set('open', true)">
        <i class="fas fa-edit">
        </i>
    </a>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="nombre">
            Editar Monto de Dinero 
            <br>
            <b>{{$cliente->nombre}}</b>
        </x-slot>
        <x-slot name="dinero">
            <div class="mb-4">
                <x-jet-label value="Dinero"/>
                <textarea wire:model="cliente.dinero" class="form-control w-full" rows="1" id="valor1"></textarea>
            </div>
            <div class="mb-4">
                {{-- <x-jet-label value="Dinero"/>  
                <input type="number" class="form-control w-full" id="valor2" step="0.001" oninput="calcular()"><br>
                <x-jet-label value="Dinero"/>
                <textarea wire:model.defer="cliente.dinero" class="form-control w-full" rows="1" id="total"></textarea>
                <script type="text/javascript">
                    function calcular(){
                        try{
                            var a = parseFloat(document.getElementById("valor1").
                            value) || 0,
                            b = parseFloat(document.getElementById("valor2").value)
                            || 0;
                            document.getElementById("total").value = a + b;
                        } catch (e) {}
                    }
                </script> --}}
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="bg-blue-500" wire:target="save" class="disabled:opacity-25" id="total">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
