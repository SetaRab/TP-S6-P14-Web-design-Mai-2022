<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClientController extends Controller{
    public function login(Request $req){
        $article = Article::all();
        $clt = Client::where('email', '=', $req['email'])->where('pass', '=', $req['pass'])->get();
        if(count($clt) != 0) {
            return view('AccueilClient', ['article' => $article]);
        } else {
            $erreur = "Invalide";
            return view('welcome',['erreur' => $erreur]);
        }
    }
}

?>
