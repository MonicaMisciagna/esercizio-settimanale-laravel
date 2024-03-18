<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dettagli attività') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="card-body my-3">
                        <h1 class="card-title"><strong>Titolo Attività: </strong>{{$attivita->nome}}</h1>
                        <p class="card-text"><strong>Descrizione: </strong>{{$attivita->descrizione}}</p>
                        <p class="card-text"><strong>Creata: </strong>{{$attivita->created_at}}</p>
                    </div>

                    <div class="card-body my-3">
                        <a type="button" class="btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-500 bg-green-300 bg-opacity-25 rounded" href="{{ route('progetto') }}"><i class="bi bi-backspace"></i></a>
                        
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><small class="text-body-secondary">Ultimo aggiornamento {{$attivita->updated_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
