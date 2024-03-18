<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('dettagli progetto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
<form method="POST" action="{{ route('progetto') }}">
    @csrf
    <div>
        <label for="nome">Nome del Progetto</label>
        <input type="text" name="nome" id="nome" required>
    <div>
        <label for="descrizione">Descrizione</label>
        <textarea name="descrizione" id="descrizione" required></textarea>
    </div>
    <div>
        <label for="stato">Stato</label>
        <input type="text" name="stato" id="stato" required>
    </div>
    <button type="submit">Salva Progetto</button>
</form>
</div>
            </div>
        </div>
    </div>
</x-app-layout>




