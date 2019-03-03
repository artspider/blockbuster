<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //indicamos con que tabla se relaciona
    protected $table = 'alumno';
    //indicamos los campos que podemos llenar
    protected $fillable = ['nombre', 'email', 'password', ];
}
