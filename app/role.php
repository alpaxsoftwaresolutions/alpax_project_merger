<?php

namespace App;

use Laratrust\Models\LaratrustRole;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'roles'; 
	public function users()
	{
	  return $this->belongsToMany(User::class);
	}
}
