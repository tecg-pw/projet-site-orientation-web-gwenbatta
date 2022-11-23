<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
       'description', 'person_id'
    ];
    protected $dates =['created_at'];
    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class);
    }
}
