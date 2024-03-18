<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Activity Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="/attivita/{{$attivita->id}}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nome" placeholder="attivita nome" value="{{$attivita->nome}}">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="descrizione" placeholder="Activity description" value="{{$activity->descrizione}}">
                        </div>
                        
                        <div class="mb-3">
                            <input type="date" class="form-control" name="stto" value="{{$attivita->stato}}">
                        </div>
                        <div class="mb-3">
                            
                            <input type="hidden" name="progetto_id" value="{{$attivita->progetto_id}}">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark d-block text-black">Update Activity</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>