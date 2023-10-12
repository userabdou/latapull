<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['PARENT_ID','MENU_LEVEL','MENU_NAME','MENU_TEXT','valid'];
    public function users()
    {
        return $this->belongsToMany(User::class,'droits','MENU_ID','USER_ID');
    }


}
