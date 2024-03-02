<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use App\Rules\Recaptcha;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
       public function furnitureGallery()
    {
        $desksAndTables = $this->getArticlesByCategoryId($this->getCategoryIdByName('Escritorios y mesas'));
        $libraries = $this->getArticlesByCategoryId($this->getCategoryIdByName('Bibliotecas'));
        $chestOfDrawers =  $this->getArticlesByCategoryId($this->getCategoryIdByName('Cajoneras')); 
        $counters =  $this->getArticlesByCategoryId($this->getCategoryIdByName('Mostradores'));
         
        return view('gallery.furnitureOffice')->with('desksAndTables',$desksAndTables)->with('libraries',$libraries)->with('chestOfDrawers',$chestOfDrawers)->with('counters',$counters);
    }
   

    public function chairsGallery()
    {
        $fixedChairs = $this->getArticlesByCategoryId($this->getCategoryIdByName('Sillas fijas'));
        $taskChairs = $this->getArticlesByCategoryId($this->getCategoryIdByName('Sillas operativas'));
        $managmentChairs = $this->getArticlesByCategoryId($this->getCategoryIdByName('Sillones gerenciales'));
        $cashierChairs = $this->getArticlesByCategoryId($this->getCategoryIdByName('Sillas cajeras'));
        $waitingRoom = $this->getArticlesByCategoryId($this->getCategoryIdByName('Sala de espera'));
        $offers = $this->getArticlesByCategoryId($this->getCategoryIdByName('OFERTAS - Sillas y Sillones Reacondicionados'));

        return view('gallery.chairs')->with('fixedChairs',$fixedChairs)->with('taskChairs',$taskChairs)->with('managmentChairs',$managmentChairs)->with('cashierChairs',$cashierChairs)->with('waitingRoom',$waitingRoom)->with('offers',$offers);
    }

    public function shelvesGallery()
    {
        $articles = $this->getArticlesByCategoryId($this->getCategoryIdByName('Estanterías metálicas'));
        return view('gallery.shelves', ['articles' => $articles]);
    }
    public function racksGallery()
    {
        $articles = $this->getArticlesByCategoryId($this->getCategoryIdByName('Racks'));
        return view('gallery.racks', ['articles' => $articles]);
    }

    public function metalFurnitureGallery()
    {
        $articles = $this->getArticlesByCategoryId($this->getCategoryIdByName('Muebles metálicos'));
        return view('gallery.metalFurniture', ['articles' => $articles]);
    }
    public function segurityGallery()
    {
        $articles = $this->getArticlesByCategoryId($this->getCategoryIdByName('Seguridad'));
        return view('gallery.segurity', ['articles' => $articles]);
    }
    public function accesoriesGallery()
    {
        $articles = $this->getArticlesByCategoryId($this->getCategoryIdByName('Accesorios'));
        return view('gallery.accesories', ['articles' => $articles]);
    }

    private function getArticlesByCategoryId($categoryId)
    {

      $articles = Article::where('categoryId',$categoryId)->orderBy('name')->get();
        return $articles;
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


    /* Metodo para enviar emails */

    public function contact(Request $request)
    {
        $this->validate($request,['g-recaptcha-response' => ['required', new Recaptcha()]]);
        $correo = new ContactMailable($request->all());
        Mail::to("goungarelli@yahoo.com.ar")->send($correo);
        return redirect('/')->with('message','Mensaje enviado');
    }
}
