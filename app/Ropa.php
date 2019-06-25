<?php

namespace Inventario;

use Illuminate\Database\Eloquent\Model;

class Ropa extends Model
{
     public function getRouteKeyName()
	{
	    return 'slug';
	}
     protected $fillable = ['name', 'picture'];
}
