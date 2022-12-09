<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'booktranslations';

    protected $fillable = [
        'name', 'slug' , 'locale', 'excerpt', 'description', 'gallery'
    ];

    protected $with = ["courses"];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class,'book_course','book_id', 'course_id');
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
