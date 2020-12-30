<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = 'municipalities';

	protected $fillable = ['name', 'province_id'];

	// Relación con modelo provincias
    public function province()
    {
        return $this->belongsTo('App\Province', 'province_id');
    }
    
    // Relación con modelo distritos municipales
    public function district()
    {
        return $this->hasMany('App\District');
    }
}
