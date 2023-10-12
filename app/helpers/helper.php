<?php

use App\Models\Menu;

function getSousMenu($id){
    $sm = Menu::find($id);
    return $sm->MENU_NAME ;
}
