<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'slug' , 'hours', 'bac', 'description'
    ];
    public function person(): BelongsToMany
    {
        return $this->belongsToMany(People::class, 'course_person', 'course_id', 'people_id');
    }
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }
    public function docs(): BelongsToMany
    {
        return $this->belongsToMany(Doc::class);
    }
    public function tools(): BelongsToMany
    {
        return $this->belongsToMany(Tool::class);
    }
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
