<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{   
    protected $table="Categorys";
    protected $fillable = [
        'name',
        'description',
        'status'
    ];
}
