<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = ['montant', 'date', 'produit_id'];

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }

    
    
    use HasFactory;
}
