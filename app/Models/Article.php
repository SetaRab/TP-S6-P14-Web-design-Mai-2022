<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Article extends Model {
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'article';
    protected $primarykey = 'id';
    public $timestamps = false;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'id',
        'titre',
        'photo',
        'resume',
        'contenu'
    ];


    public static function insertArticle($titre,$photo,$resume,$contenu){
        $article=new Article();
        $article->titre=$titre;
        $article->photo=$photo;
        $article->resume=$resume;
        $article->contenu=$contenu;
        $article->save();
        return view('...');
    }

    public function getSlug(){
        $Util = Util::slugify($this->titre);
        return $Util;
    }
}

?>
