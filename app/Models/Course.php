<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id'
    ];
    protected $with = ["translation"];

    public function translation(): HasMany
    {
        return $this->hasMany(CourseTranslation::class);
    }
    public function person(): BelongsToMany
    {
        return $this->belongsToMany(People::class, 'course_person', 'course_id', 'people_id');
    }
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class,'course_project','course_id','project_id');
    }
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_course','course_id','book_id');
    }

    public function tools(): BelongsToMany
    {
        return $this->belongsToMany(Tool::class,'course_tool','course_id','tool_id');
    }

    public function docs(): BelongsToMany
    {
        return $this->belongsToMany(Doc::class,'course_doc','course_id','doc_id');
    }
}
