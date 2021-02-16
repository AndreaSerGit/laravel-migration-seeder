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

        <h1>Modifica articolo di giornale</h1>


        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>     
                  @endforeach

              </ul>
          </div>
            
        @endif


   <form action=" {{ route('articles.update', $article->id) }}" method="POST">
    @csrf
    @method('PUT')
      <div class="form-group">
        <label for="title">Titolo</label>
        <input type="text" class="form-control" name="title" id="title"  value="{{ $article->title }}">
      </div>
      <div class="form-group">
        <label for="subtitle">Sottotitolo</label>
        <input type="text" class="form-control" name="subtitle" id="subtitle"  value="{{ $article->subtitle }}">
      </div>
      <div class="form-group">
        <label for="author">Autore</label>
        <input type="text" class="form-control" name="author" id="author"  value="{{ $article->author }}">
      </div>
      <div class="form-group">
        <label for="text">Testo</label>
        <input type="text" class="form-control" name="text" id="text" value="{{ $article->text }}">
      </div>
      <div class="form-group">
        <label for="pubblication_year">Anno di publicazione</label>
        <input type="number" class="form-control" name="pubblication_year" id="pubblication_year" placeholder="Anno di publicazione" value="{{ $article->pubblication_year }}">
      </div>
      <button type='submit' class="btn btn-primary">Modifica Articolo</button>
      <a href="{{route('articles.index')}}"> < Torna alla Home</a>   
  </form>

    </div>
</body>
</html>