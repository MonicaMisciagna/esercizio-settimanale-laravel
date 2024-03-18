<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('modifica progetto') }}
        </h2>
    </x-slot>
  
   
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('progetto.update', $progetto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $progetto->nome }}">
    </div>
    <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea class="form-control" id="descrizione" name="descrizione">{{ $progetto->descrizione }}</textarea>
    </div>
    <div class="mb-3">
        <label for="stato" class="form-label">Stato</label>
        <select class="form-select" id="stato" name="stato">
            <option value="in_corso" {{ $progetto->stato === 'in_corso' ? 'selected' : '' }}>In corso</option>
            <option value="concluso" {{ $progetto->stato === 'concluso' ? 'selected' : '' }}>Concluso</option>
           
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Salva Modifiche</button>
</form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>




