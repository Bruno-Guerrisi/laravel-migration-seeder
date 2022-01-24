<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>travels</title>
</head>
<body>

    <header>
        <h1>Cerca il tuop viaggio perfetto</h1>
    </header>

    <main>
        
        <div class="container">
            <div class="row">
                
                <h2>Lista Viaggi</h2>
            </div>

            <div class="row">
                
                @foreach($travels as $travel)

                <div class="col-4 mb-5">
                    <div class="card h-100" style="width: 18rem;">
                        {{-- <img src="{{$travel->poster}}" class="card-img-top" alt="{{$travel->title}}"> --}}
                    
                        <div class="card-body">
                            <h5 class="card-title">{{$travel->title}}</h5>
                            <p class="card-text">{{$travel->description}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">città: {{$travel->city}}</li>
                            <li class="list-group-item">prezzo: {{$travel->price}}&euro;</li>
                            <li class="list-group-item">numero persone: {{$travel->max_people}}</li>
                        </ul>
                    </div>
                </div>

                @endforeach
            </div>
        </div>

    </main>
</body>
</html>