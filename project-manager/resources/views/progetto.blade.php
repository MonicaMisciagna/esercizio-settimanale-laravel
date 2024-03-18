

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista Progetti') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-5">
                    <h1 class="text-2xl font-semibold mb-4 inline">Elenco Progetti</h1>
                    <a href="{{ route('progetto.create') }}" class="btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-pink-500 bg-orange-300 bg-opacity-25 rounded-lg float-end inline"><i class="bi bi-plus-square"></i></a>
                    </div>
                   
                    @if($progetti->isEmpty())
                        <p>Nessun progetto trovato.</p>
                    @else
                        <ul>
                     
                            @foreach($progetti as $progetto)
                                <li class="my-4">
                                    {{ $progetto->nome }}

                                   <div class="float-end d-flex">
                                    <a href="{{ route('progetto.show', $progetto->id) }}" class="inline btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-teal-500 bg-teal-300 bg-opacity-25 rounded float-end inline"><i class="bi bi-search"></i></a>
                                    <form action="{{ route('progetto.destroy', $progetto->id) }}" method="POST">
                                     @csrf
                                    @method('DELETE')
                                  <button type="submit" class="mx-1 inline btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 bg-red-300 bg-opacity-25 rounded  inline" onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')"><i class="bi bi-trash"></i></button>
                                    </form>
                                 </div>
                                </li>

                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
