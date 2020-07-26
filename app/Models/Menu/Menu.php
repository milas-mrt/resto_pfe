<?php

namespace App\Models\Menu;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Menu extends Model
{
    use SoftDeletes;

    public $table = 'Menus';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'categorie',
        'entrees',
        'plats_principaux',
        'boissons',
        'desserts'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'categorie' => 'string',
        'entrees' => 'string',
        'plats_principaux' => 'string',
        'boissons' => 'string',
        'desserts' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'categorie' => 'required',
        'entrees' => 'required',
        'plats_principaux' => 'required',
        'boissons' => 'required',
        'desserts' => 'required'
    ];
}
