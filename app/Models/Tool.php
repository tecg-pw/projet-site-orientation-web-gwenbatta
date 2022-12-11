<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tool extends Model
{
    use HasFactory, SoftDeletes;
    protected $with  = ["translation", "courses"];

    protected $fillable = [
        'id'
    ];
        public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class,'course_tool','tool_id','course_id');
    }
    public function translation(): HasMany
    {
        return $this->hasMany(ToolTranslation::class);
    }
}
