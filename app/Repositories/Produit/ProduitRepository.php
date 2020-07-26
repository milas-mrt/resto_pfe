<?php

namespace App\Repositories\Produit;

use App\Models\Produit\Produit;
use InfyOm\Generator\Common\BaseRepository;

class ProduitRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Produit::class;
    }
}
