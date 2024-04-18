<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $product_id
 * @property integer $allergy_id
 * @property integer $category_id
 */
class productallergy extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'productallergy';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'allergy_id', 'category_id'];
}
