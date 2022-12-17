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

    protected $fillable = [
        'description', 'locale', 'testimonial_id'
    ];
    protected $dates =['created_at'];

    public function testimonial(): BelongsTo
    {
        return $this->belongsTo(Testimonial::class);
    }
}
