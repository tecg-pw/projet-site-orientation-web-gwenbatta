<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory, SoftDeletes;
    protected $with = ['courses'];
    protected $fillable = [
        'name', 'firstname', 'slug' , 'status', 'avatar', 'description', 'link_portfolio', 'link_github', 'linkedin', 'instagram', 'mail','job','gallery','begin','end'
    ];
    protected $table = 'people';

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_person', 'people_id', 'course_id');
    }
}
