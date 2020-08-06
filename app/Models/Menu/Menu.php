<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;



class Menu extends Model
{

    public $table = 'Menus';
    


    public $fillable = [
        'nom',
        'categorie',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'categorie' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'categorie' => 'required'
    ];


    public function Produits(){
        return $this->belongsToMany('App\Produit\Produit', 'menu_produit');
    }



    public function User(){
        return $this->belongsTo('App\User');
    }
}
