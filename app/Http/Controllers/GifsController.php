<?php

namespace App\Http\Controllers;

use App\Gif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GifsController extends Controller
{
   public function index(){
       $gifs = Gif::orderBy('id', 'DESC')->paginate(30);
       return response()->view('site.home',[
           'gifs' => $gifs
       ]);
   }

   public function showGifs(){
       $gifs = Gif::orderBy('created_at', 'DESC')->paginate(30);
   }

   public function register(){
       return view('registerGif.gifRegister');
   }

    public function store(Request $request){
       if (!($request->password === env('INSERT_GIF_PASSWORD'))){
           return Redirect::back()->withInput($request->all())->withErrors(['Senha incorreta']);
       }else{
           $gif = new Gif();
           $gif->url = $request->URL;
           $gif->tags = $request->tags;
           $gif->save();
           return Redirect::back()->with('sucess','Gif cadastrado');
       }
    }
}
