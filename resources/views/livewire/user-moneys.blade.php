<div>

    <h1>hola</h1>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <x-table>
            <div class="px-6 py-4 flex item-center">
                <div class="flex items-center">
                    <span>Mostrar</span>
                    <select wire:model="cant" class="mr-2 form-control">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="50">50</option>
                    </select>
                </div>
                {{-- <input type="text" wire:model="search"> --}}
                <x-jet-input class="w-full mr-4" placeholder="Escriba un Nombre" type="text" wire:model="search" />

                @livewire('create-cliente')
            </div>
            @if ($clientes->count())
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('id')">
                                ID
                                <i class="fas fa-sort float-left mt-1"></i>
                            </th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('nombre')">
                                NOMBRE
                                <i class="fas fa-sort float-left mt-1"></i>
                            </th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                                wire:click="order('dinero')">
                                DINERO
                                <i class="fas fa-sort float-left mt-1"></i>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $cliente->id }}
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-900">
                                        {{ $cliente->nombre }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{ $cliente->dinero }}
                                        <p>Bs.-</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    @livewire('edit-cliente', ['cliente' => $cliente], key($cliente->id))
                                </td>
                            </tr>
                        @endforeach
                        <!-- More people... -->
                    </tbody>
                </table>
            @else
                <div class="px-6 py-4">
                    No existe ese nombre
                </div>
            @endif

            <div class="px-6 py-3">
                {{$clientes->links()}}
            </div>
        </x-table>
    </div>
</div>
