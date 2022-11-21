<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumArticle extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function ArticleHasUser ()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }


}
