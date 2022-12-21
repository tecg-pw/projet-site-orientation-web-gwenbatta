<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class SoftwareTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'softwaretranslations';

    protected $fillable = [
        'name', 'slug' ,'locale'
    ];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Software::class);
    }
}
