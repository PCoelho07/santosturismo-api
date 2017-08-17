<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
	protected $table = 'tb_passengers';

	protected $primaryKey = 'id_passengers';

	protected $fillable = ['city_destination', 'city_origin', 'partners_count', 'trip_count', 'created_at', 'updated_at'];

	protected $guarded = ['id_passengers', 'people_id'];


	public function personalData() {

		return $this->belongsTo('App\Person', 'people_id');

	}

	public function tripData() {
		return $this->belongsTo('App\Trip', 'trip_id');
	}
}
