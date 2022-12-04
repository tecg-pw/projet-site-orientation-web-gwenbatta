<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug' , 'locale', 'hours', 'bac', 'description'
    ];

    protected $table = 'coursetranslations';

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function person(): BelongsToMany
    {
        return $this->belongsToMany(People::class, 'course_person', 'course_id', 'people_id');
    }
    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class,'course_projecttranslation','project_id','course_id');
    }
    public function docs(): BelongsToMany
    {
        return $this->belongsToMany(DocTranslation::class);
    }
    public function tools(): BelongsToMany
    {
        return $this->belongsToMany(ToolTranslation::class);
    }
    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }
}
