<div>
    <x-jet-danger-button wire:click="$set('open', true  )">
        Crear nuevo Cliente
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="nombre">
            Crear nuevo Cliente
        </x-slot>
        <x-slot name="dinero">
            <div class="mb-4">
                <x-jet-label value="Nombre"/>
                <x-jet-input type="text" class="w-full" wire:model="nombre"/>
                
                <x-jet-input-error for="nombre"/>
            </div>
            <div class="mb-4">
                <x-jet-label value="Dinero"/>
                <textarea wire:model.defer="dinero" class="form-control w-full" rows="1"></textarea>
                <x-jet-input-error for="dinero"/>
            </div>
        </x-slot>
        <x-slot name="footer">

            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save" wire:loading.attr="bg-blue-500" wire:target="save" class="disabled:opacity-25">
                Crear Cliente
            </x-jet-danger-button>


        </x-slot>

    </x-jet-dialog-modal>

</div>
