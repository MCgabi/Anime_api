<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    protected $fillable = [
        'anime_id', 'first_name', 'last_name', 'role'
      ];
}
