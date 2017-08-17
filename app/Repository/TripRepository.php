<?php

namespace App\Repository;

use App\Repository\Contract\BaseRepositoryInterface;
use App\Trip;



class TripRepository implements BaseRepositoryInterface
{
	private $trip;

    public function __construct(Trip $trip)
    {
    	$this->trip = $trip;
    }


    public function findAll()
    {
    	return $this->trip->all();
    }

	public function findById($id)
	{
		return $this->trip->find($id);
	}

	public function findBy($att, $column)
	{
		return $this->trip->where($att, $column)
							->first();
	}

	public function create(array $data = null)
	{
		
	}
}
