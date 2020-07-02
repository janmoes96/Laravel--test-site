<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'text',
    ];

    protected $attributes = array(
        'lang' => 'NL',
      );
}
