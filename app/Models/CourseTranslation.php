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


}
