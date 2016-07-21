<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentarz extends Model
{
    protected $table = 'komentarze';

    public function post()
    {
        return $this->belongsTo('Post');
    }
}
