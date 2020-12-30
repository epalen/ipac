<?php

namespace App;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'description',
    ];

    public function scopeName($query, $name)
    {
        return $query->where('name', 'like', "%" . $name . "%")
                        ->orWhere('display_name', 'like', "%" . $name . "%")
                        ->orWhere('description', 'like', "%" . $name . "%");
    }
}
