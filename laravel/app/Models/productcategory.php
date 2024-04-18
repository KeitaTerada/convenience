<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $product_id
 * @property integer $category_id
 */
class productcategory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'productcategory';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'category_id'];
}
