<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 */
class allergy extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'allergy';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name'];
}
