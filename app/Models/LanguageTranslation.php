<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LanguageTranslation extends Model
{
    use HasFactory;

    protected $table = 'languagetranslations';

    protected $fillable = [
        'name', 'slug' ,'locale'
    ];

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}
