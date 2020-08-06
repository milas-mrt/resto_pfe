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
        'occupee'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'occupee' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'occupee' => 'boolean'
    ];


    public function Reservation(){

        return $this->hasMany('App\Reservation');
    }
}
