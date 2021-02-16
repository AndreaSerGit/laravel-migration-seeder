<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
</head>
<body>
    <div class="container">

        <h1>Articolo di giornale</h1>

        
        <table class="table  table-striped table-bordered">
            @foreach ($article->getAttributes() as $key => $value)
                <tr>
                    <td><strong>{{ $key }}</strong></td>
                    <td>{{ $value }}</td>
                </tr>         
            @endforeach
        </table>
            



        <a href="{{route('articles.index')}}"> < Torna alla Home</a>   

    </div>
    
</body>
</html>