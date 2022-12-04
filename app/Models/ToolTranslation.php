<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class ToolTranslation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tooltranslations';
    //protected $with = ["courses"];
    protected $fillable = [
        'name', 'slug' , 'locale', 'link', 'excerpt'
    ];
//    public function courses(): BelongsToMany
//    {
//        return $this->belongsToMany(Course::class);
//    }

    public function tool(): BelongsTo
    {
        return $this->belongsTo(Tool::class);
    }
}
