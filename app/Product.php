<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable=['imagePath','tittle','description','price'];
}
