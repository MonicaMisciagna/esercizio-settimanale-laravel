<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attivita extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'descrizione', 'stato', 'progetto_id'];
    
   
}
