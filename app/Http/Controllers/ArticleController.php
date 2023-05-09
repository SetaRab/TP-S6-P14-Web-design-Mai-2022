<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller {
    public function listArticle(){
        $article = Article::all();
        return view('AccueilAdmin',['article' => $article]);
    }

    public function addArticle (Request $req) {
        $img = base64_encode(file_get_contents($req->file('photo')->getRealPath()));
        $article = $req->all();
        Article::insertArticle($article['titre'],$img,$article['resume'],$article['contenu']);
        $article = Article::all();
        return redirect()->route('AccueilAdmin', ['article' => $article]);
    }
}

?>
