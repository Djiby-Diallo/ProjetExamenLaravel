<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
use App\Models\Produit;

class VenteController extends Controller
{
    public function __construct()
    {
        if (Storage::disk('local')->exists('monfichier.txt')== false) {
            $text = '';
            Storage::disk('local')->put('monfichier.txt', $text); 
        }
        
    }

    public function index(){

        $header = 'Liste des ventes';

        $ventes = Vente::all();

        return view('ventedb.home',compact('ventes','header'));

        //$header = 'Liste des categories';

        //$text = Storage::disk('local')->get('monfichier.txt');
        //$lines = explode(';',$text);
        //$table = [];
        //for ($i=0; $i < count( $lines) -1; $i++) { 
            //array_push($table,explode(',',$lines[$i]));
        //}
      
 
        //return view('home',compact('table','header'));

    }

    public function create()
{
    $produits = Produit::all();
    return view('ventedb.create', compact('produits'));
}

public function store(Request $request)
{
    $vente = new Vente();

    $vente->montant = $request->montant;
    $vente->date = $request->date;
    $vente->produit_id = $request->produit_id;

    $vente->save();

    return redirect()->route('vente.index');
}



    public function getId(){

      $text =   Storage::disk('local')->get('monfichier.txt');

      $details = explode(';',$text);
      if (count($details) == 0 || count($details) == 1) {
          return 1;
      }else{
        

        $items = explode(',',$details[count($details)-2]);

        $id = (int)$items[0] + 1;

        return $id; 

      }
      
    }

    public function edite($id){

        $ventes = Vente::find($id);
        $produits = Produit::all();
    
        return view('ventedb.edit', compact('ventes', 'produits'));
    }

    public function update(Request $request)
{
    $vente = Vente::find($request->id);

    $vente->montant = $request->montant;
    $vente->date = $request->date;
    $vente->produit_id = $request->produit_id;

    $vente->save();

    return redirect()->route('vente.index');
}

    public function supprimer($id)
{
    $ventes = Vente::find($id);

    if ($ventes) {
        $ventes->delete();
    }

    return redirect()->route('vente.index');
}







}
