<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class movie
 * @package App\Models
 * @version August 28, 2019, 1:29 am -03
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
   // use SoftDeletes;

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

    public function category()
    {
        return $this->belongsTo(movie_category::class, 'id_category');
    }

    public function show(){
        $res="No";
         if($this->show=='1'){
             $res="Yes";
         }

         return $res;
    }

    public function scopeTitle($query,$title)
    {
        return $query->where('title', 'like', '%'.$title.'%');
    }
}
