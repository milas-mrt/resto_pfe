<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;


class Client extends Model
{
    use SoftDeletes;

    public $table = 'Clients';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'nom',
        'email',
        'motdepasse',
        'numtel',
        'adresse'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'nom' => 'string',
        'email' => 'string',
        'motdepasse' => 'string',
        'numtel' => 'string',
        'adresse' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'email' => 'email',
        'motdepasse' => 'required'
    ];

    public function Commande(){
        return $this->hasMany('App\Commande\Commande');
    }

    public function Reservation(){
        return $this->hasMany('App\Reservation\Reservation');
    }
}
