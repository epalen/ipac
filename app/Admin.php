<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

class Admin extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait;

    protected $guard = 'admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname', 'area', 'job_title', 'email', 'phone', 'movil', 'extension', 'gender', 'institution_id', 'avatar', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function proposals()
    {
        return $this->hasOne('App\Proposal');
    }    

    public function institution()
    {
        return $this->hasOne('App\Institution');
    }

    public function institutionId()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

    public function pComments()
    {
        return $this->hasOne('App\ProposalComments');
    }

    public function banner()
    {
        return $this->hasOne('App\Banner');
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', 'like', "%" . $name . "%")
                        ->orWhere('lastname', 'like', "%" . $name . "%")
                        ->orWhere('email', 'like', "%" . $name . "%");
    }
}
