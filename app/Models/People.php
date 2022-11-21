<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class People extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'firstname', 'slug' , 'status', 'avatar', 'description', 'link_portfolio', 'link_github', 'linkedin', 'instagram', 'mail','job','gallery','begin','end'
    ];
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
    public function classes(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
