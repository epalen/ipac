<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'proposals';

    protected $fillable = [
        'user_id', 'admin_id', 'prefix', 'order', 'title', 'province_id', 'municipalities', 'address', 'description', 'status', 'institution_id'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User');
    }

    public function userid()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function admins()
    {
        return $this->belongsTo('App\Admin');
    }

    public function adminId()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function institution()
    {
        return $this->hasOne('App\Institution');
    }

    public function institutionId()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }

    public function provinces()
    {
        return $this->belongsTo('App\Province');
    }

    public function provinceId()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function municipalities()
    {
        return $this->belongsTo('App\Municipality');
    }

    public function municipalityId()
    {
        return $this->belongsTo(Municipality::class, 'municipalities');
    }

    // Relación con documentos de propuestas
    public function documents()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    // Relación con mesas de propuestas
    // public function topics()
    // {
    //     return $this->belongsTo('App\Topic');
    // }

    public function topics()
    {
        return $this->belongsToMany(Topic::class, 'proposals_topics');
    }

    public function proposalcomments()
    {
        return $this->hasMany('App\ProposalComments');
    }

    /*public function topics()
    {
        return $this->belongsTo(ProposalsTopics::class, 'proposal_topic_id');
    }*/

    public function scopeSearch($query, $search) {
        return $query
            ->where('user_id', 'like', "%" . $search . "%")            
            ->orWhere('title', 'like', "%" . $search . "%")
            ->orWhere('province_id', 'like', "%" . $search . "%");
    }

    public function scopeName($query, $name)
    {
    	$query->where('user_id', 'like', "%" . $name . "%")
    			->orWhere('title', 'like', "%" . $name . "%");
    }

    static function topicsByProposals()
    {
		return Proposal::with(['topics'])->orderBy('id','desc')->paginate(5);
    }

    static function topicByProposal()
    {
		return Proposal::with(['topics']);
    }
}


