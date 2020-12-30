<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProposalsTopics extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'proposals_topics';

    protected $fillable = [
    	'topic_id'
    ];
}
