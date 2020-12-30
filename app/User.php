<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'doc_type', 'doc_number', 'phone', 'phone_work', 'phone_mobile', 'gender', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proposal()
    {
        return $this->hasOne('App\Proposal');
    }

    public function scopeSearch($query, $name)
    {
        $query->where('name', 'LIKE', "%$name%");
    }
}
