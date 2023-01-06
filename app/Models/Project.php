<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ["translation","course","person"];
    protected $fillable = [
        'id'
    ];

    public function translation(): HasMany
    {
        return $this->hasMany(ProjetTranslation::class);
    }

    public function course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class,'course_project','project_id', 'course_id');
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }

}
