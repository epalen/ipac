<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContentAdmin extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'contents';

    protected $fillable = [
        'detail_proposed_form', 'ipac_description', 'transparency', 'open_government', 'brief_description'
    ];

    public function scopeName($query, $name)
    {
    	$query->where('detail_proposed_form', 'like', "%" . $name . "%");
    }
}
