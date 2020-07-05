<?php

namespace App\Repos;
use App\Repos\Repository;
use App\Models\Brand;

class BrandRepos extends Respository{


    public function __construct(Brand $model){

        parent::__construct($model);

    }

    public function insert(array $data){


        if(is_assoc($data)){
            return $this->model->create($data);
        }else{
            return $this->model->insert($data);
        }



    }
}