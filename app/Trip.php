<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
	protected $table = 'tb_trips';

	protected $primaryKey = 'id_trips';

	protected $fillable = ['exit_date', 'arrival_date', 'passengers_qtt', 
							'city_destination', 'city_origin', 'created_at', 'updated_at'];

	protected $guarded = ['id_trips'];
}
