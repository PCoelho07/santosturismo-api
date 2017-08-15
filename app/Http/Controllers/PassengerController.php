<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;

class PassengerController extends Controller
{
	private $passenger;

	public function __construct(Passenger $passenger)
	{
		$this->passenger = $passenger;
	}

    
	public function allPassengers() {
		
		$this->passenger = Passenger::all();

		return $this->passenger->toJson();
	}

	public function passengersById($id) {
		
		$this->passenger = Passenger::find($id);

		return $this->passenger->toJson();		
	}


	




}
