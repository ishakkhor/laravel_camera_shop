<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{

	//  you have to make all field fillable. guarded is like black list. if you add a field in the array, it will be not fillable
	protected $guarded = [];
    //    category have this product

public function category() {
    return $this -> belongsTo(Category::class);
  }
}
