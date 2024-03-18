<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('dettagli progetto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="row g-0">
                        <div class="card-body my-3">
                        <div class="float-end" >
                                <a href="{{ route('progetto.edit', $progetto->id) }}" class="btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-pink-500 bg-orange-300 bg-opacity-25 rounded-lg inline px-4 "><i class="bi bi-pencil"></i></a>
                            </div>
                            <div>
                            <h1 class="card-title"><strong>Nome progetto: </strong>{{$progetto->nome}}</h1>
                            <p class="card-text"><strong>Descrizione: </strong>{{$progetto->descrizione}}</p>
                     
                            <p class="card-text"><strong>Stato: </strong>{{$progetto->stato}}</p>
                            <p class="card-text"><strong>Creato: </strong>{{$progetto->created_at}}</p>
                            <div>
                            
                        </div>
                        <div class="card-body my-3">
                        <div class= "mb-4 d-flex justify-content-between">
                            <h2 class="card-title bold">{{ __('Attivita') }}</h2>
                            
                               <a href="{{ route('attivita.create', ['progetto_id' => $progetto->id]) }}" class="btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-pink-500 bg-orange-300 bg-opacity-25 rounded-lg float-end inline ">
                               <i class="bi bi-plus-square"></i>
</a>
</div>
                            @if(count($progetto->attivita) > 0)
                                <ul class="list-group list-group-flush">
                                @foreach ($progetto->attivita as $attivita)
    <li class="list-group-item">
        <strong class= "bold">{{$attivita->nome}} </strong>
       
            <a type="button" class=" float-end inline btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-teal-500 bg-teal-300 bg-opacity-25 rounded float-end inline" href="/attivita/{{$attivita->id}}">
            <i class="bi bi-search"></i>
            </a>
        
    </li>
@endforeach

                                </ul>
                            @else
                                <p>I don't have any records!</p>
                            @endif
                        </div>
                        <div class="card-body my-3">
                            <a type="button" class=" btn font-semibold text-grey-800 hover:text-grey-800  focus:outline focus:outline-2 focus:rounded-sm focus:outline-green-500 bg-green-300 bg-opacity-25 rounded" href="{{route('progetto')}}"><i class="bi bi-backspace"></i></a>
                        </div>
                        <div class="card-footer">
                            <p class="card-text"><small class="text-body-secondary">Last updated {{$progetto->updated_at}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>




