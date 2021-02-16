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
        <table class="table  table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titolo</th>
                    <th>Sottotitolo</th>
                    <th>Autore</th>
                    <th>Testo</th>
                    <th>Anno Pubblicazione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td> {{ $article->id }} </td>
                    <td> {{ $article->title }} </td>
                    <td> {{ $article->subtitle }} </td>
                    <td> {{ $article->author }} </td>
                    <td> {{ $article->text }} l</td>
                    <td> {{ $article->pubblication_year }}</td>
                </tr>      
                @endforeach
            </tbody>
        </table>
    </div>
    
</body>
</html>