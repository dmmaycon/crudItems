<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['id', 'name', 'description', 'quantity', 'image', 'create_at', 'update_at'];

}
