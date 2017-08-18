<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected  $table = 'tb_services';

    protected $primaryKey = 'id_services';

    protected $fillable = ['name', 'desc', 'category', 'price'];
}
