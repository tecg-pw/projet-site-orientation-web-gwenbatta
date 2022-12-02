<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjetTranslation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'projecttranslations';

    protected $dates = ['date'];

    protected $with = ["person"];

    protected $fillable = [
        'title', 'slug','locale', 'description', 'link_project', 'link_github', 'date', 'main_picture', 'gallery','project_id'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
