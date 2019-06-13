<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $table = "pisos";
    protected $primaryKey = "pis_id";
    public $incrementing = true;
    protected $filltable = ["pis_descripcion", "updated_at", "created_at"];
}
