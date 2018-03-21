<?php

namespace Portfolio;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    public $fillable = [
    	'name', 'url', 'year', 'completed'
    ];

    public function tags()
    {
    	return $this->belongsToMany(Tag::class);
    }

    public function courseTags()
    {
    	return $this->tags()->where('parent','course')->get();
    }
}
