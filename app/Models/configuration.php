<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class configuration
 * @package App\Models
 * @version August 18, 2019, 10:52 pm UTC
 *
 * @property string direccion
 * @property string email
 * @property string phone
 * @property string horarios
 * @property string facebook
 * @property string instagram
 * @property string social
 * @property string mensaje
 * @property string popup
 * @property integer paginateA
 * @property inetger paginateB
 * @property string style
 */
class configuration extends Model
{
    use SoftDeletes;

    public $table = 'configurations';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'direccion',
        'email',
        'phone',
        'horarios',
        'facebook',
        'instagram',
        'social',
        'mensaje',
        'popup',
        'paginateA',
        'paginateB',
        'style'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'direccion' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'horarios' => 'string',
        'facebook' => 'string',
        'instagram' => 'string',
        'social' => 'string',
        'mensaje' => 'string',
        'popup' => 'string',
        'paginateA' => 'integer',
        'style' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'email',
        'paginateA' => 'numeric|min:0|max:100',
        'paginateB' => 'numeric|min:0|max:100'
    ];

    
}
