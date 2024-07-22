<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 

class CategorieController extends Controller
{
    public function __construct()
    {
        if (Storage::disk('local')->exists('monfichier.txt')== false) {
            $text = '';
            Storage::disk('local')->put('monfichier.txt', $text); 
        }
        
    }

    public function index(){

        $header = 'Liste des categories';

        $categories = Categorie::all();

        return view('categoriedb.home',compact('categories','header'));

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
        return view('categoriedb.create');
    }

    

    public function store(Request $resquest){

        $categorie = new Categorie();

        $categorie->libelle = $resquest->libelle;
        
         $id = $this->getId();

         $categorie->save();

        

        return redirect()->route('categorie.index');

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

        $categorie = Categorie::find($id);

        return view('categoriedb.edit',compact('categorie'));
    }

    public function update(Request $resquest){

        
        $categorie = Categorie::find($resquest->id);

        $categorie->libelle = $resquest->libelle;
        
         $id = $this->getId();

         $categorie->update();

        

        return redirect()->route('categorie.index');

    }

    public function supprimer($id){

        $categorie = Categorie::find($id);

        $categorie->delete();
        return redirect()->route('categorie.index');
    }

    

}
