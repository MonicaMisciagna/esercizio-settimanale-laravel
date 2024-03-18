<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgettoRequest;
use App\Http\Requests\UpdateProgettoRequest;
use App\Models\Progetto;
use Illuminate\Support\Facades\Auth;



class ProgettoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Carica i dati dei progetti dal database
        $progetti = Progetto::all();
    
        // Restituisci la vista con i dati dei progetti
        return view('progetto', compact('progetti'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea_progetto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgettoRequest $request)
    {
         // Validazione dei dati
    $validatedData = $request->validate([
        'nome' => 'required|string|max:255',
        'descrizione' => 'required|string',
        'stato' => 'required|string|max:100',
    ]);

    // Creazione di un nuovo progetto
    $progetto = new Progetto();
    $progetto->nome = $validatedData['nome'];
    $progetto->descrizione = $validatedData['descrizione'];
    $progetto->stato = $validatedData['stato'];
    $progetto->utente_id = Auth::id();
    $progetto->save();

    // Reindirizza alla pagina del nuovo progetto
    return redirect()->route('progetto', ['progetto' => $progetto->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Progetto $progetto)
    {
        return view('dettagli_progetto', ['progetto' => $progetto->load('attivita')]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Progetto $progetto)
    {
        return view('modifica_progetto', compact('progetto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgettoRequest $request, Progetto $progetto)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descrizione' => 'required|string',
            'stato' => 'required|string|max:50',
           
        ]);
    
        $progetto->update($request->all());
    
        return redirect()->route('progetto.show', $progetto->id)->with('success', 'Progetto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Progetto $progetto)
    {
        $progetto->delete();
       
        
        return redirect('/progetto')->with('success', 'Progetto eliminato con successo.');
    }
}
