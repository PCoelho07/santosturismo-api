<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'tb_people';

    protected $fillable = [
    	'name', 'cpf', 'rg', 'date'
    ];
}
