<?php

namespace App\Models\Commande;

use Illuminate\Database\Eloquent\Model;



class Commande extends Model
{

    public $table = 'Commandes';
    


    public $fillable = [
        'quantite',
        'destination',
        'prix',
        'user_id',
        'client_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'quantite' => 'integer',
        'destination' => 'string',
        'prix' => 'float',
        'user_id' => 'integer',
        'client_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'quantite' => 'required',
        'destination' => 'required',
        'prix' => 'required'
    ];


    public function Produit(){
        return $this->hasMany('App\Produit\Produit');
    }

    public function Client(){

        return $this->belongsTo('App\Client\Client');
    }


    public function User(){
        return $this->belongsTo('App\User');
    }
}
