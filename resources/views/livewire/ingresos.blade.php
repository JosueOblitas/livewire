<x-slot name="header">
    <h1 class="text-gray-900">CRUD con Laravel y Livewire</h1>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-zl sn:rounded-lg px-4 py-4">
            <button wire:click="crear()" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 my-3">Nuevo</button>
            @if ($modal)
                @include('livewire.crear')
            @endif
            <table class="table-foxed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">DESCRIPCION</th>
                        <th class="px-4 py-2">CANTIDAD</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ingresos as $ingreso)
                        <tr>
                            <td class="border px-4 py-2">{{$ingreso->id}}</td>
                            <td class="border px-4 py-2">{{$ingreso->descripcion}}</td>
                            <td class="border px-4 py-2">{{$ingreso->cantidad}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>