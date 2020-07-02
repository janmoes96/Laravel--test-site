<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    protected $table = 'post_translations';

    protected $fillable = ['title', 'content'];

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
