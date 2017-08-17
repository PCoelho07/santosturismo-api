<?php

namespace App\Repository;

use App\Passenger;
use App\Repository\Contract\PassengerRepositoryInterface;

class PassengerRepository implements PassengerRepositoryInterface
{
   	
   	protected $passenger;


	public function __construct(Passenger $passenger) 
	{
		$this->passenger = $passenger;
    }

    public function findAll()
    {
    	return $this->passenger->with('personalData')->first();
    }

    public function findById($id)
    {
    	return $this->passenger->find($id);
    }

    public function findBy($att, $column)
    {
    	return $this->passenger->where($att, $column)->first();
    }

    public function findDetailsByPassenger($id)	
    {
    	return $this->passenger->with('personalData')
    							->where('id_passengers', $id)
    							->first();
    }

    public function createPassenger(array $data)
    {
    	// To DO

    	return true;
    }

}
