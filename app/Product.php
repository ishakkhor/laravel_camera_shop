<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{

	//  you have to make all field fillable.
	  protected $fillable = [
        'category_id', 
        'brand_id', 
        'product_name',
        'product_short_description',
        'product_long_description',
        'product_price',
        'product_image',
        'product_color',
        'publication_status',
    ];
    //    category have this product

public function category() {
    return $this -> belongsTo(Category::class);
  }
}
