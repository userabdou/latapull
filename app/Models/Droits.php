<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Droits extends Model
{
    use HasFactory;
    protected $fillable = ['MENU_ID','USER_ID','ACCESS'];
}
