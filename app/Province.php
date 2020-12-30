<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
	
	protected $fillable = ['name'];

	// Relación con modelo propuestas ciudadanas
    public function client()
    {
    	return $this->hasMany('App\Proposal');
    }

	// Relación con modelo municipios
    public function municipality()
    {
        return $this->hasMany('App\Municipality');
    }

    // Relación con modelo instituciones
    public function institution()
    {
        return $this->hasMany('App\Institution');
    }

    public function institutionId()
    {
        return $this->belongsTo(Institution::class, 'province_id');
    }

    public function scopeName($query, $name)
    {
    	$query->where('name', 'like', "%" . $name . "%");
    }

}
