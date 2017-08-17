<?php

namespace App\Repository\Contract;


/**
* 
*/
interface BaseRepositoryInterface
{
	
	public function findAll();

	public function findById($id);

	public function findBy($att, $column);

	public function create(array $data);
	
}
