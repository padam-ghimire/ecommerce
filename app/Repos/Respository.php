<?php

namespace App\Repos;

use illuminate\Database\Eloquent\Model;


class Respository{



    protected $model;

    public function __construct(Model $model){
        $this->model= $model;
    }

}


