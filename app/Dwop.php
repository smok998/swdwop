<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dwop extends Model
{
    protected $table = 'dwop';

    protected $fillable = [
        'nazwa', 'adres', 'tel_fax',
    ];
       public function wsp()
    {
        return $this->belongsToMany('App\Wsp','dwop_wsp','dwop_id','wsp_id');
    }
}
