<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Progetto extends Model
{
    use HasFactory;
    public function attivita(): HasMany {
        return $this->hasMany(Attivita::class);
    }
    protected $fillable = [
        'nome', 'descrizione', 'stato'
    ];
}

