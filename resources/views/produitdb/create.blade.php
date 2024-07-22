<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       
        <title>GESTION DE VENTES</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    
    <body class="antialiased">
        <nav class="navbar bg-primary">
            <h1 class="h2"><a class="text-light" href="/">Home</a></h2>
        </nav>
            <div class="row">
                    <div class="col-md-2"> 
                            <div id="list-example" class="list-group">
                                    <a class="list-group-item list-group-item-action" href="/produits">Lister</a>
                                    <a class="list-group-item list-group-item-action" href="create">Ajouter</a>
                                   </div>
                    </div>
                    <div class="col-md-10">
        
                        <h1> Liste des Produits</h1>
                        <br/>
                        <form action="{{ route('produit.store') }}" method="POST" class="w-50">
                            @csrf
                            <div class="form-group">
                                 <label >Code </label>
                                 <input class="form-control" type="text" name="code" id="code"/>

                            </div>
                            <div class="form-group">
                                <label >Prix Unitaire </label>
                                <input class="form-control" type="number" name="prix_unitaire" id="prix_unitaire"/>

                           </div>

                           <div class="form-group">
                            <label >Quantite </label>
                            <input class="form-control" type="number" name="quantite" id="quantite"/>

                       </div>

                            

                               <br/>
                               <div>
                                   <button class="btn btn-success" type="submit"> terminer</button>
                                   <button class="btn btn-light"  type="reset">Annuler</button>

                               </div>


                        </form>

                            
                           
        
                    </div>
        
                </div>
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    </body>
</html>
