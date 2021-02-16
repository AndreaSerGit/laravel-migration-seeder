<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        
        return view("articles.home" , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("articles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate(
            [
                'title' => 'required|max:30',
                'subtitle' => 'required|max:30',
                'author' => 'required|max:30',
                'text' => 'required|max:500',
                'pubblication_year' => 'required|numeric',
            ]
        );

        $article = new Article();
        $article->title = $data['title'];
        $article->subtitle = $data['subtitle'];
        $article->author = $data['author'];
        $article->text = $data['text'];
        $article->pubblication_year = $data['pubblication_year'];
        $result = $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);


        return view("articles.articolo" , compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("articles.edit", compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->all();

        $request->validate(
            [
                'title' => 'required|max:30',
                'subtitle' => 'required|max:30',
                'author' => 'required|max:30',
                'text' => 'required|max:500',
                'pubblication_year' => 'required|numeric',
            ]
        ); 
        
        $article->update($data);

        

        return redirect()->route('articles.index')->with('message' , 'Il prodotto' . " $article->title " . 'è stato modificato correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('message' , " l'articolo " . " $article->title " . 'è stato eliminato');
    }
}
