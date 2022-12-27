<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class StatusTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'statustranslations';

    protected $fillable = [
        'name', 'slug' ,'locale'
    ];

    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
