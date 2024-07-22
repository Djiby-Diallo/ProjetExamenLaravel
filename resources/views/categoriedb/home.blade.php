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
                                    <a class="list-group-item list-group-item-action" href="/categories">Lister</a>
                                    <a class="list-group-item list-group-item-action" href="{{ route('categorie.create') }}">Ajouter</a>
                                   </div>
                    </div>
                    <div class="col-md-10">
        
                            <h1> {{$header}}</h1>
                        <br>
                        
                            <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Libelle</th>                                    
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                          @foreach ($categories as $categorie)
                                      <th scope="row">{{ $categorie->id}}</th>
                                          <td>{{ $categorie->libelle}}</td>
                                          <td>
                                            <a class="btn btn-primary " href="{{ route('categorie.edite', $categorie->id) }}"> Modifier</a>
                                            <a class="btn btn-danger" href="{{ route('categorie.supprimer', $categorie->id) }}"> Supprimer</a>
                                            
                                          </td>
                                        </tr>
                                          @endforeach
                                        
                                     
                                       
                                    </tbody>
                                  </table>
                           
        
                    </div>
        
                </div>

              
      
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  
    </body>
</html>
