<?php

namespace App\Models\Reservation;

use Illuminate\Database\Eloquent\Model;



class Reservation extends Model
{

    public $table = 'Reservations';
    


    public $fillable = [
        'date',
        'quantite',
        'prix',
        'nopersonne',
        'client_id',
        'user_id',
        'table_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'quantite' => 'integer',
        'prix' => 'float',
        'nopersonne' => 'integer',
        'client_id' => 'integer',
        'user_id' => 'integer',
        'table_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'date' => 'required',
        'quantite' => 'required',
        'nopersonne' => 'required'
    ];


    public function Produit(){

        return $this->hasMany('App\Produit\Produit');
    }




    public function Table(){

        return $this->belongsTo('App\Table\Table');
    }



    public function Client(){

        return $this->belongsTo('App\Client\Client');
    }



    public function User(){

        return $this->belongsTo('App\User');
    }


}
