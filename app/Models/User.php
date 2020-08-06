<?php namespace App\Models;

use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentTaggable\Taggable;
use Str;

class User extends EloquentUser
{
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $table = 'users';

    /**
     * The attributes to be fillable from the model.
     *
     * A dirty hack to allow fields to be fillable by calling empty fillable array
     *
     * @var array
     */
    use Taggable;

    protected $fillable = [];
    protected $guarded = ['id'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
    * To allow soft deletes
    */
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $appends = ['full_name'];
    public function getFullNameAttribute()
    {
        return Str::limit($this->first_name . ' ' . $this->last_name, 30);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }



    public function Menu(){

        return $this->hasMany('App\Menu\Menu');
    }



    public function Produit(){

        return $this->hasMany('App\Produit\Produit');
    }



    public function Reservation(){

        return $this->hasMany('App\Reservation\Reservation');
    }



    public function Commande(){

        return $this->hasMany('App\Commande\Commande');
    }
}
