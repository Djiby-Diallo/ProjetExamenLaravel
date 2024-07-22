<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vente;
use App\Models\Produit;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $ventesDuJour = Vente::whereDate('date', Carbon::today())->count();

        $montantVentesDuJour = Vente::whereDate('date', Carbon::today())->sum('montant');

        $produitPlusVendu = Produit::withCount('ventes')->orderByDesc('ventes_count')->first();

        return view('dashboard', [
            'ventesDuJour' => $ventesDuJour,
            'montantVentesDuJour' => $montantVentesDuJour,
            'produitPlusVendu' => $produitPlusVendu
        ]);

        
    }
  
}
