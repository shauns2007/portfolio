<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
	use SoftDeletes;

	protected $dates = ['deleted_at'];

	protected $fillable = [
        'name', 'url', 'description', 'image'
    ];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }

    public function projectTags()
    {
    	return $this->tags()->where('parent','project')->get();
    }
}
