<?php
namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller{
    public function login(Request $req){
        $article = Article::all();
        $admin = Admin::where('email', '=', $req['email'])->where('pass', '=', $req['pass'])->get();
        if(count($admin) != 0) {
            return view('AccueilAdmin',['article'=>$article]);
        } else {
            $erreur = "Invalide";
            return view('welcome',['erreur' => $erreur]);
        }
    }
}

?>
