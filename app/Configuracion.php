<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    protected $table = "configuraciones";
    protected $primaryKey = "con_id";
    public $incrementing = true;
    protected $filltable = ["con_descripcion", "con_retrasoAceptable", "updated_at", "created_at"];
}
