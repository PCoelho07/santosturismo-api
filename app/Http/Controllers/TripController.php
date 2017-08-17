<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TripRepository;


class TripController extends Controller
{
	private $tripRepository;
    
    public function __construct(TripRepository $tripRepository)
    {
    	$this->tripRepository = $tripRepository;
    }


    public function allTrips()
    {
    	$data = $this->tripRepository->findAll();

    	if (! $data) {
    		return response()->json(['error' => 'Trip not found'], 400);
    	}

    	return $data;
    }


    public function tripsById($id)
    {
    	$data = $this->tripRepository->findById($id);

    	if(! $data) {
    		return response()->json(['error' => 'Trip not found'], 400);	
    	}

    	return $data;
    }

    public function tripsBy($att, $column)
    {
    	$data = $this->tripRepository->findBy($att, $column);

    	if(! $data) {
    		return response()->json(['error' => 'Trip not found'], 400);		
    	}

    	return $data;
    }
}
