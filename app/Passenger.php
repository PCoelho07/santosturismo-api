<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
	protected $table = 'tb_passengers';

	protected $primaryKey = 'id_passengers';

	protected $fillable = ['city_destination', 'city_origin', 'partners_count', 'trip_count'];

	protected $guarded = ['id_passengers', 'people_id', 'created_at', 'updated_at'];


	public function people() {

		return $this->hasOne('App\People');

	}
}
