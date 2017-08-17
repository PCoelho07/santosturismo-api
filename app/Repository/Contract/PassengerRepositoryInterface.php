<?php

namespace App\Repository\Contract;


/**
* 
*/
interface PassengerRepositoryInterface
{
	
	public function findAll();

	public function findById($id);

	public function findBy($att, $column);
	
}
