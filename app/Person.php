<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
   protected $table = 'tb_people';

    protected $primaryKey = 'id_people';

    protected $fillable = ['name', 'cpf', 'rg', 'date', 'email', 'created_at', 'updated_at'];

    protected $guarded = ['id_people'];
}
