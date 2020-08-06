<?php

namespace App\Repositories\Reservation;

use App\Models\Reservation\Reservation;
use InfyOm\Generator\Common\BaseRepository;

class ReservationRepository extends BaseRepository
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
        return Reservation::class;
    }
}
