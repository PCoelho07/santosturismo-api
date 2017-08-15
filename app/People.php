<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'tb_people';

    protected $primaryKey = 'id_people';

    protected $fillable = ['name', 'cpf', 'rg', 'date'];

    protected $guarded = ['id_people', 'created_at', 'updated_at'];
}
