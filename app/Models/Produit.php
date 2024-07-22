<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'code',
        'prix_unitaire',
        'quantite',
    ];
    
    public function ventes()
    {
        return $this->hasMany(\App\Models\Vente::class);
    }
    
    use HasFactory;
}
