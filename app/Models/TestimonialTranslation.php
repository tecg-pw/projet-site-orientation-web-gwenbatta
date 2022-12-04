<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestimonialTranslation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'testimonialtranslations';

    protected $with = ["person"];

    protected $fillable = [
        'description', 'person_id','locale'
    ];
    protected $dates =['created_at'];

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }

    public function testimonial(): BelongsTo
    {
        return $this->belongsTo(Testimonial::class);
    }
}
