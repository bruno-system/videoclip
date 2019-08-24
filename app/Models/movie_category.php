<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class movie_category
 * @package App\Models
 * @version August 17, 2019, 7:46 pm UTC
 *
 * @property string name
 */
class movie_category extends Model
{
    use SoftDeletes;

    public $table = 'movie_categories';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|unique:movie_categories'
    ];

    
}
