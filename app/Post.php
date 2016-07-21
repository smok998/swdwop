<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posty';

    public function komentarz()
    {
        return $this->hasMany('\App\Komentarz','post_id');
    }
}
