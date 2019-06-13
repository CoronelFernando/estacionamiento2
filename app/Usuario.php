<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "usu_id";
    public $incrementing = true;
    protected $filltable = ["usu_matricula", "usu_contrasena", "usu_tipo", "updated_at", "created_at"];
}
