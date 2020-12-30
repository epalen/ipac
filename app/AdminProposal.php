<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminProposal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'proposals';

    protected $fillable = [
        'admin_id', 'status', 'comments', 'closing_comments', 'institution_id', 'table_id'
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
        return $this->hasMany('App\Document');
    }

    public function documentId()
    {
        return $this->belongsTo(Document::class, 'document_id');
    }

    // Relación con mesas de propuestas
    public function proposaltopic()
    {
        return $this->belongsTo('App\ProposalsTopics');
    }

    public function proposaltopicId()
    {
        return $this->belongsTo(ProposalsTopics::class, 'table_id');
    }

    public function scopeName($query, $name)
    {
        $query->join('admins', 'proposals.id', '=', 'admins.id')
              ->select(
                'proposals.*',
                'admins.name as admin_name',
                'admins.lastname as admin_last_name',
                'admins.area as admin_area',
                'admins.job_title as admin_job_title',
                'admins.email as admin_email',
                'admins.phone as admin_phone',
                'admins.movil as admin_movil')
              ->where('proposals.order','like',"%$name%")
              ->orWhere('proposals.title','like',"%$name%");
    }

    public function scopeDocument($query)
    {
        $query->join('documents', 'proposals.document_id', '=', 'documents.id')
            ->select('proposals.document_id as ppid', 'proposals.id', 'documents.name', 'documents.created_at')
            ->groupBy('proposals.id', 'documents.name', 'documents.created_at')
            ->orderBy('document_id', 'desc')
            ->get();
    }
}
