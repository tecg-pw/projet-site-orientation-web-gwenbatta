<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'persontranslations';
    protected $with = ['courses'];
    protected $dates =['begin','end'];
    protected $fillable = [
        'name', 'firstname', 'slug', 'status', 'avatar', 'description', 'link_portfolio', 'link_github', 'linkedin', 'instagram', 'mail', 'job', 'begin', 'end'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }

    public function projects(): HasMany
    {
        return $this->hasMany(ProjetTranslation::class);
    }
    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_person', 'people_id', 'course_id');
    }
    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class, 'partner_person', 'people_id', 'partner_id');
    }
}
