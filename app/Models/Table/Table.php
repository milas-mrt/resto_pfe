<?php

namespace App\Models\Table;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Table extends Model
{
    use SoftDeletes;

    public $table = 'Tables';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'num'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'num' => 'required'
    ];
}
