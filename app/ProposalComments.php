<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProposalComments extends Model
{
    protected $table = 'proposal_comments';

    protected $fillable = ['proposal_id', 'admin_id', 'comments'];

    public function proposal()
    {
        return $this->belongsTo('App\Proposal', 'proposal_id');
    }

    public function admim()
    {
        return $this->belongsTo('App\Admin', 'admin_id');
    }

    public function scopeAdmins($query, $id)
    {
        $query->join('admins', 'proposal_comments.admin_id', '=', 'admins.id')
            ->select('proposal_comments.admin_id as paid', 'proposal_comments.comments', 'admins.id', 'admins.name', 'admins.created_at')
            ->groupBy('proposal_comments.comments', 'admins.id', 'admins.name', 'admins.created_at')
            ->where('proposal_comments.proposal_id', '=', $id)
            ->orderBy('admin_id', 'desc')
            ->get();
    }

}
