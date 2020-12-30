<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'topics';

    /*protected $fillable = [
    	'purchases', 'civil_services', 'financial_management', 'access_information', 'infrastructure', 'health', 'education', 'energy', 'water', 'watchdogs'
    ];*/

    protected $fillable = [
    	'name', 'description'
    ];

    // public function proposals()
    // {
    //     return $this->belongsTo('App\Proposal');
    // }

    public function proposals()
    {
        return $this->belongsToMany(Proposal::class, 'proposals_topics');
    }

    public function adminproposal()
    {
        return $this->belongsToMany(AdminProposal::class, 'proposals_topics');
    }

    public function proposalId()
    {
        return $this->belongsTo(Proposal::class, 'proposal_id');
    }
}
