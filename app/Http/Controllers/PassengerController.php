<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\Contract\PassengerRepositoryInterface;

class PassengerController extends Controller
{
	private $passengerRepository;

	public function __construct(PassengerRepositoryInterface $passengerRepository) 
	{
		$this->passengerRepository = $passengerRepository;
	}

    
	public function allPassengers() 
	{
		$data = $this->passengerRepository->findAll();

		if(! $data )
		{
			return $this->error('Passengers not found', 400);
		}

		return response()->json($data);
	}

	public function passengersById( $id ) 
	{
		$data = $this->passengerRepository->findById($id);

		if(! $data )
		{
			return $this->error('Passenger not found', 400);
		}

		return response()->json($data);
	}

	public function passengersBy($att, $column)
	{
		$data = $this->passengerRepository->findBy($att, $column);

		if(! $data )
		{
			return $this->error('Passenger not found', 400);
		}

		return response()->json($data);
	}


	public function passengersByIdWithDetails($id)
	{
		$data = $this->passengerRepository->findDetailsByPassenger($id);

		if(! $data )
		{
			return $this->error('Passenger not found', 400);
		}

		return response()->json($data);
	}

	private function error($message, $code)
	{
		return response()->json(['error' => $message], $code);
	}


	




}
