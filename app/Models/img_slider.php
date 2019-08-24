<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class img_slider
 * @package App\Models
 * @version August 17, 2019, 9:42 am UTC
 *
 * @property string title
 * @property string img
 * @property string description
 * @property integer show
 * @property integer id_user
 */
class img_slider extends Model
{
    use SoftDeletes;

    public $table = 'img_sliders';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'img',
        'description',
        'show',
        'id_user'
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
        'description' => 'string',
        'show' => 'integer',
        'id_user' => 'integer'
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

    //relacion solo tiene un user
    public function user(){
        return $this->belongsTo('App\User','id_user');
    }

    
}
