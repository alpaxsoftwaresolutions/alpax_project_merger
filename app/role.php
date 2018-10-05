<?php

namespace App;

use Laratrust\Models\LaratrustRole;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'roles'; 
    public function users()
    {
        return $this
            ->belongsToMany('App\User')
            ->withTimestamps();
    }
}
