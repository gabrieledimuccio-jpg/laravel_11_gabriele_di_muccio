<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
/**
* Display a listing of the resource.
*/

public function home()
{
$articles = Article::latest()->take(3)->get();

return view('welcome', compact('articles'));
}

public function index()
{
$articles = Article::latest()->get();
return view('articles.index', compact('articles'));
}
/**
* Show the form for creating a new resource.
*/

public function my_ricettario()
{
$articles = auth()->user()->articles; 
return view('articles.my-ricettario', compact('articles'));
}

public function create()
{
return view('articles.create');
}

/**
* Store a newly created resource in storage.
*/

public function store(Request $request)
{
$validated = $request->validate([
'title'             => 'required|string|max:255',
'category'          => 'required|string',
'preparation_time'  => 'required|string', 
'ingredients'       => 'required|string',
'preparation'       => 'required|string',
]);
$validated['user_id'] = auth()->id();
\App\Models\Article::create($validated);
return redirect()->route('my-ricettario')->with('success', 'Ricetta salvata nel tuo ricettario!');

}

/**
* Display the specified resource.
*/
public function show(Article $article)
{
return view('articles.show', compact('article'));
}

/**
* Show the form for editing the specified resource.
*/
public function edit(Article $article)
{
return view('articles.edit', compact('article'));
}

/**
* Update the specified resource in storage.
*/
public function update(Request $request, Article $article)
{
$data = $request->validate([
'title'             => 'required|string|max:255',
'category'          => 'required|string',
'preparation_time'  => 'required|string',
'ingredients'       => 'required|string',
'preparation'       => 'required|string',
]);

$article->update($data);

return redirect()->route('show', $article)->with('success', 'Articolo aggiornato con successo!');
}

/**
* Remove the specified resource from storage.
*/
public function destroy(Article $article)
{
$article->delete();

return redirect()
->route('my-ricettario')
->with('success', 'Ricetta eliminata con successo!');
}
}
