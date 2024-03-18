<?php

namespace App\Http\Controllers;

use App\Models\Attivita;
use App\Http\Requests\StoreAttivitaRequest;
use App\Http\Requests\UpdateAttivitaRequest;
use App\Models\Progetto;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttivitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'AttivitaController index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($progetto_id)
    {
        return view('crea_attivita', ['progetto_id' => $progetto_id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
     public function store(Request $request)
     {
         $dati = $request->only(['nome', 'descrizione', 'stato', 'progetto_id']);
         $dati['created_at'] = Carbon::now();
     
         Attivita::create($dati);
         return redirect('/progetto/'.$request->progetto_id);
     }
     
    /**
     * Display the specified resource.
     */
    public function show(Attivita $attivita)
    {
        return view('dettagli_attivita', ['attivita' => $attivita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attivita $attivita)
    {
        return view('modifica_attivita', ['attivita' => $attivita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttivitaRequest $request, Attivita $attivita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attivita $attivita)
    {
        $attivita->delete();
        return redirect('/progetto/'.$attivita->progetto_id);
    }
}