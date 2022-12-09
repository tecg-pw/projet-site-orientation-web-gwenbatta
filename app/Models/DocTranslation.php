<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DocTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'doctranslations';

    //protected $with = ["courses"];

    protected $fillable = [
        'name', 'slug' ,'locale', 'link', 'excerpt'
    ];

//    public function courses(): BelongsToMany
//    {
//        return $this->belongsToMany(Course::class);
//    }

    public function doc(): BelongsTo
    {
        return $this->belongsTo(Doc::class);
    }
}
