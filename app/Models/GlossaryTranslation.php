<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class GlossaryTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'glossarytranslations';

    protected $fillable = [
        'name', 'slug' ,'locale', 'definition'
    ];

    public function glossary(): BelongsTo
    {
        return $this->belongsTo(Glossary::class);
    }
}
