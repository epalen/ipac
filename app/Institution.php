<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $table = 'institutions';

	protected $fillable = ['name', 'acronym', 'address', 'category', 'business_hours', 'province_id',  'number'];

	// Relation with Admin Users
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function adminId()
    {
        return $this->belongsTo('App/Admin');
    }

    public function proposal()
    {
        return $this->belongsTo('App\Proposal');
    }

    public function province()
    {
        return $this->belongsTo('App\Province');
    }

    public function scopeName($query, $name)
    {
        $query->where('name', 'like', "%" . $name . "%")
                ->orWhere('acronym', 'like', "%" . $name . "%")
                ->orWhere('address', 'like', "%" . $name . "%");
    }
}
