<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Repos\BrandRepos;

class BrandController extends Controller
{
    //

    public function __construct(){
        $this->middleware(['auth'])->only('manage');
    }


    public function manage(Request $resquest,BrandRepos $brepo){
        $this->authorize('manage',Brand::class);

        // $brepo->insert(['name'=>'acer']);
        foreach(range(0,100) as $i){
            $brepo->insert(['name'=>'brand'.$i]);
    
        }
    }

}
