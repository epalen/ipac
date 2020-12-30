<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'documents';
    
    protected $fillable = ['name', 'proposal_id', 'user_id', 'admin_id', 'document_type'];

    // Relación con Propuestas
    public function proposal()
    {
        return $this->belongsTo(AdminProposal::class, 'proposal_id');
    }

    // Relación con Usuarios
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con Usuarios
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    // Relación con Usuarios Administradores
    public function userAdmin()
    {
        return $this->belongsTo('App\Admin', 'admin_id');
    }

    public function scopeDocuments($query)
    {
        $query->join('proposals', 'documents.proposal_id', '=', 'proposals.id')
            ->select('documents.proposal_id as docid', 'documents.name', 'proposals.id', 'proposals.created_at')
            ->groupBy('documents.name', 'proposals.id', 'proposals.created_at')
            ->orderBy('admin_id', 'desc')
            ->get();
    }
}
