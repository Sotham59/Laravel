<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'content', 'image']; // Les attributs qui peuvent être mass assignable

    // Définir les relations avec d'autres modèles si nécessaire
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
