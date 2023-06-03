<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        return view('article.index', ['articles' => $articles, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::orderBy('name')->get();
        return view('article.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $article = new Article();

        $request->validate(
            ['image' => 'required|image']
        );

        $img = $request->file('image')->store('public/images');

        //Con este método cambio el nombre de la ruta para guardarla en mi base de datos correctamente.
        $url = Storage::url($img);

        $article->name = $request->get('name');
        $article->description = $request->get('description');
        $article->image = $url;
        $article->categoryId = $request->get('categoryId');

        if ($request->get('premium') != null)
            $article->premium = $request->get('premium');
        else {
            $article->premium = false;
        }
        
        if ($request->get('modern') != null)
            $article->modern = $request->get('modern');
        else {
            $article->modern = false;
        }

        $article->save();


        return redirect('/articles');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $article = Article::find($id);
        $category = Category::find($article->categoryId);
        $categories = Category::all();

        return view('article.edit', ['article' => $article, 'category' => $category, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);

        if ($request->file('image') != null) {
            $request->validate(
                ['image' => 'required|image']
            );

            $img = $request->file('image')->store('public/images');

            //Con este método cambio el nombre de la ruta para guardarla en mi base de datos correctamente.
            $url = Storage::url($img);
            $article->image = $url;
        }

        $article->name = $request->get('name');
        $article->description = $request->get('description');
        $article->categoryId = $request->get('categoryId');
        if ($request->get('premium') != null)
            $article->premium = $request->get('premium');
        else {
            $article->premium = false;
        }
        
        if ($request->get('modern') != null)
            $article->modern = $request->get('modern');
        else {
            $article->modern = false;
        }

        $article->save();

        return redirect('/articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles')->with('delete', 'ok');
    }
}
