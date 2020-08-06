<?php

namespace App\Models\Produit;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Produit extends Model
{
    use SoftDeletes;

    public $table = 'Produits';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'composants',
        'prix',
        'image',
        'user_id',
        'type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'composants' => 'string',
        'prix' => 'float',
        'image' => 'string',
        'user_id' => 'integer',
        'type' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'user_id' => 'integer'
    ];


    public function Commande(){

        return $this->belongsToMany('App\Commande\Commande');
    }


    public function Reservation(){

        return $this->belongsToMany('App\Reservation\Reservation');
    }


    public function Menu(){

        return $this->belongsToMany('App\Menu\Menu' , 'menu_produit');
    }


    public function User(){

        return $this->belongsTo('App\User');
    }
}
