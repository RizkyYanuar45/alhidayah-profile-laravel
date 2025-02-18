<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Author;
use App\Models\Banner;
use App\Models\Category;
use Illuminate\Http\Request;
Use App\Models\Jurusan;

class Frontcontroller extends Controller
{
    public function index(){
        $categories = Category::all();

        $articless = Article::with(['category'])
        ->where('is_featured','not_featured')
        ->latest()
        ->take(3)
        ->get();
       
        $featured_articles = Article::with(['category'])
        ->where('is_featured','featured')
        ->inRandomOrder()
        ->take(3)
        ->get();

        $author = Author::all();
        $banner = Banner::where('is_active','active')
        ->where('type','promosi')
        ->inRandomOrder()
         
         ->first();

         $informasi_articles = Article::whereHas('category', function ($query){
            $query->where('name','informasi');
         })
         ->where('is_featured','not_featured')
         ->latest()
         ->take(6)
         ->get();

         $informasi_articles_featured = Article::whereHas('category', function ($query){
            $query->where('name','informasi');
         })
         ->where('is_featured','featured')
         ->inRandomOrder()
         ->first();

         $acara_articles = Article::whereHas('category', function ($query){
            $query->where('name','acara');
         })
         ->where('is_featured','not_featured')
         ->latest()
         ->take(6)
         ->get();

         $acara_articles_featured = Article::whereHas('category', function ($query){
            $query->where('name','acara');
         })
         ->where('is_featured','featured')
         ->inRandomOrder()
         ->first();
         $jurusan = Jurusan::all();
        return view('front.index',compact('categories','articless','author','featured_articles',
        'banner','informasi_articles','informasi_articles_featured','acara_articles','acara_articles_featured',
         'jurusan'));

    }
    //model binding
    public function category(Category $category){
        $categories = Category::all();
        $banner = Banner::where('is_active','active')
        ->where('type','promosi')
        ->inRandomOrder()
         
         ->first();
        return view('front.category', compact('category','categories','banner'));
    }

    public function author(Author $author){
      $categories = Category::all();
      $banner = Banner::where('is_active','active')
        ->where('type','promosi')
        ->inRandomOrder()
        ->first();
      return view('front.author', compact('categories','author','banner'));
    }

    public function search(Request $request){
      $request->validate(['keyword'=> ['required','string','max:255'],
      ]);
      $categories = Category::all();

      $keyword = $request->keyword;

      $articles = Article::with(['category','author'])
      ->where('name','like','%'. $keyword .'%')->paginate(6);

      return view('front.search',compact('articles','keyword','categories'));
    }

   public function details(Article $article){
      $categories = Category::all();

      $articles = Article::with(['category'])
      ->where('is_featured','not_featured')
      ->where('id','!=', $article->id)
      ->latest()
      ->take(3)
      ->get();

      $banner = Banner::where('is_active','active')
        ->where('type','panjang')
        ->inRandomOrder()
        ->first();

      $square_banner = Banner::where('type', 'kotak')
            ->where('is_active', 'active')
            ->inRandomOrder()
            ->take(2)
            ->get();

        if ($square_banner->count() < 2) {
            $square_banner_1 = $square_banner->first();
            $square_banner_2 = $square_banner->first();
        } else {
            $square_banner_1 = $square_banner->get(0);
            $square_banner_2 = $square_banner->get(1);
        }

        $author_news = Article::where('author_id', $article->author_id)
        ->where('id','!=',$article->id)
        ->inRandomOrder()
        ->get();

      return view('front.details',compact('article','categories','articles','banner','square_banner_1','square_banner_2','author_news'));
   }

   public function jurusan(){
      $categories = Category::all();
      $data = Jurusan::all();
      return view('front.jurusan', compact('categories','data'));
   }
}
