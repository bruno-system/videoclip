<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class movie
 * @package App\Models
 * @version August 17, 2019, 10:11 pm UTC
 *
 * @property string title
 * @property string img
 * @property string video
 * @property string description
 * @property integer show
 * @property integer id_category
 */
class movie extends Model
{
    use SoftDeletes;

    public $table = 'movies';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'img',
        'video',
        'description',
        'show',
        'id_category'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'img' => 'string',
        'video' => 'string',
        'description' => 'string',
        'show' => 'integer',
        'id_category' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'img' => 'required'
    ];

    
}
