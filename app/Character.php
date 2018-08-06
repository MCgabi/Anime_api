<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
       'anime_id', 'first_name', 'last_name', 'age', 'gender', 'bio'
     ];
}
