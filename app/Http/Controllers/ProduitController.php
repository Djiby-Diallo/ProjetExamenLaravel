<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 


class ProduitController extends Controller
{
    public function __construct()
    {
        if (Storage::disk('local')->exists('monfichier.txt')== false) {
            $text = '';
            Storage::disk('local')->put('monfichier.txt', $text); 
        }
        
    }

    public function index(){

        $header = 'Liste des produits';

        $produits = Produit::all();

        return view('produitdb.home',compact('produits','header'));

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
        return view('produitdb.create');
    }

    public function store(Request $resquest){

        $produits = new Produit();

        $produits->code = $resquest->code;
        $produits->prix_unitaire = $resquest->prix_unitaire;
        $produits->quantite = $resquest->quantite;
        
         $id = $this->getId();

         $produits->save();

        

        return redirect()->route('produit.index');

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

        $produits = Produit::find($id);

        return view('produitdb.edit',compact('produits'));
    }

    public function update(Request $resquest){

        
        $produits = Produit::find($resquest->id);

        $produits->code = $resquest->code;
        $produits->prix_unitaire = $resquest->prix_unitaire;
        $produits->quantite = $resquest->quantite;
        
         $id = $this->getId();

         $produits->update();

        

        return redirect()->route('produit.index');

    }

    public function supprimer($id)
{
    $produits = Produit::find($id);

    if ($produits) {
        $produits->delete();
    }

    return redirect()->route('produit.index');
}

}
