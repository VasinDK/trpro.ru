<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class SiteController extends Controller
{
     
    /*
    $mainMenu - возвращаемое значение. Массив меню
    $allMenu - начальный массив меню полченый из таблицы menus
    $parentMenu - модель одного элемента меню
    $arChildren - количество дочерних пунктов меню расматриваемого пункта
    $childrenMenu - модель одного элемента меню используемое для поиска дочернего элемента
    $item - пункт меню со своими свойствами
    parent - свойство содержащего в себе id родителя 
    title - название элемента меню
    path - адрес ссылки
    cardinality - количество дочерних элементов
    */

    // получаем массив меню
    protected function getMenu(){
        $allMenu = DB::table('menus')-> get();

        foreach($allMenu as $parentMenu){
            $arChildren = 0;

            // Проверяем есть ли у меню родительского пункта дочерние пункты меню
            if($parentMenu->parent == 0){
                foreach($allMenu as $childrenMenu){
                    if($parentMenu->id == $childrenMenu->parent){
                        $arChildren++;
                    }
                }
            }

            // создаем массив меню, с указанием количества дочерних пунктов меню.
            $item = ['id' => $parentMenu->id, 'title' => $parentMenu-> title, 'path' => $parentMenu-> path, 'parent' => $parentMenu->parent, 'cardinality' => $arChildren];
            $mainMenu[] = $item;
        }
        return $mainMenu;
         
    }


}
