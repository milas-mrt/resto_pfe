<?php

namespace App\Repositories\Table;

use App\Models\Table\Table;
use InfyOm\Generator\Common\BaseRepository;

class TableRepository extends BaseRepository
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
        return Table::class;
    }
}
