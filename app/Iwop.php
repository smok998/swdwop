<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iwop extends Model {

    protected $table = 'iwop_dwop';

    public function dwop()
    {

    // 1st parameter is eloquent class name
    // 2nd parameter is foreign key
    // 3rd parameter is local key in "users" table
        return $this->hasMany('App\Dwop');
}

}
