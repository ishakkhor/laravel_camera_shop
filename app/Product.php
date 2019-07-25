<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //    category have this product

public function category() {
    return $this -> belongsTo(Category::class);
  }
}
