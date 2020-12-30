<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerAdmin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'banners';

    protected $fillable = [
        'name', 'admin_id', 'starting_at', 'ending_at', 'status'
    ];

    public function admins()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function scopeName($query, $name)
    {
    	$query->where('name', 'like', "%" . $name . "%");
    }
}
