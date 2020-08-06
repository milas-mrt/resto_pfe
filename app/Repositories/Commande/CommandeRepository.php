<?php

namespace App\Repositories\Commande;

use App\Models\Commande\Commande;
use InfyOm\Generator\Common\BaseRepository;

class CommandeRepository extends BaseRepository
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
        return Commande::class;
    }
}
