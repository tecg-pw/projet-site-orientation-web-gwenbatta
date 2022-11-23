<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates =['date'];
    protected $fillable = [
        'title', 'slug' , 'description',  'link_project','link_github','date', 'main_picture','gallery'
    ];
    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }
    protected $with = ["courses"];
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class);
    }
}
