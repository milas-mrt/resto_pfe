<?php

namespace App\Repositories\Client;

use App\Models\Client\Client;
use InfyOm\Generator\Common\BaseRepository;

class ClientRepository extends BaseRepository
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
        return Client::class;
    }
}
