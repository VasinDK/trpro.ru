<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class IndexController extends SiteController
{
    /*
    $mainMenus - массив меню. Вычесления в родительском классе
    env('THEME') - название темы
    */

    public function execute(){
        
        // получаем меню
        $mainMenus = $this-> getMenu();

        if(view()->exists(env('THEME').'.site.index')){
  
            return view(env('THEME').'.site.index', [
                'mainMenus'=> $mainMenus,
            ]);
  
        }
    
    }
}
