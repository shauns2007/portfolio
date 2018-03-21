<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

	protected $fillable = [
        'name', 'parent'
    ];

    public function project()
    {
    	return $this->belongsToMany(Project::class);
    }

    public function projectTags()
    {
    	return $this->project()->where('parent','project')->get();
    }

    public function courseTags()
    {
    	return $this->project()->where('parent','course')->get();
    }
}
