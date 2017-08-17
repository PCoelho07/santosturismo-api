<?php

namespace App\Repository;

use App\Passenger;
use App\Repository\Contract\BaseRepositoryInterface;

class PassengerRepository implements BaseRepositoryInterface
{
   	
   	protected $passenger;


	public function __construct(Passenger $passenger) 
	{
		$this->passenger = $passenger;
    }

    public function findAll()
    {
    	return $this->passenger->with(['personalData', 'tripData'])
                               ->get();
    }

    public function findById($id)
    {
    	$data = $this->passenger->find($id);

        if( $data )
        {
            return $data->with(['personalData', 'tripData'])
                        ->first();
        }

        return false;

    }

    public function findBy($att, $column)
    {
    	return $this->passenger->with(['personalData', 'tripData'])
                               ->where($att, $column)
                               ->first();
    }

    public function create(array $data = null)
    {
    	

    	return true;
    }

}
