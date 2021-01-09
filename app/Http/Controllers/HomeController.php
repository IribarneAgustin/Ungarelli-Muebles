<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function furnitureGallery()
    {

        $articles = $this->getArticlesByCategoryId($this->getCategoryIdByName('Muebles de oficina'));
        return view('gallery.furnitureOffice', ['articles' => $articles]);
    }

    private function getArticlesByCategoryId($categoryId)
    {

        $articles = Article::all();

        $furnitureList = array();

        foreach ($articles as $article) {
            if ($article->categoryId == $categoryId) {
                array_push($furnitureList, $article);
            }
        }

        return $furnitureList;
    }

    private function getCategoryIdByName($name)
    {

        $categories = Category::all();
        $id = 0;

        foreach ($categories as $category) {

            if ($category->name == $name) {
                $id = $category->id;
            }
        }

        return $id;
    }
}
