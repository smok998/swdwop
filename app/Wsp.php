<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wsp extends Model
{
    protected $table = 'wsp';

    public function dwop()
    {
        return $this->belongsToMany('App\Dwop','dwop_wsp','wsp_id','dwop_id');
    }
}
