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
        <div class="col-md-2 g">
            <div id="list-example" class="list-group">
                <a class="list-group-item list-group-item-action" href="categories">Categories</a>
                <a class="list-group-item list-group-item-action" href="produits">Produits</a>
                <a class="list-group-item list-group-item-action" href="ventes">Ventes</a>


            </div>
        </div>
        
        <div class="col-md-10">

            <h1>TABLEAU DE BORD</h1>
            <br>

            <ul class="list-group">
                <li class="list-group-item"><a href="{{ route('categorie.index') }}">Categories</a></li>
                <li class="list-group-item"><a href="{{ route('produit.index') }}">Products</a></li>
                <li class="list-group-item"><a href="{{ route('vente.index') }}">Ventes</a></li>
            </ul>
            <br>
            <h2>STATISTIQUE DU JOUR :</h2> <br>
            
            <table class="table table-bordered">
                <tr>
                    <th>Montant du vente du jour</th>
                    <td>{{ $montantVentesDuJour }}</td>
                </tr>
                <tr>
                    <th>Nombre de produit vendu</th>
                    <td>{{ $ventesDuJour }}</td>
                </tr>
                <tr>
                    <th>Produit le plus vendu</th>
                    <td>{{ $produitPlusVendu->code ?? 'Aucun produit vendu aujourd\'hui' }}</td>
                </tr>
            </table>

           
    
           

        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
