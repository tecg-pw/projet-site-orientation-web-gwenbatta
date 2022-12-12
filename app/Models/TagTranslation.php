<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagTranslation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tagtranslations';

    protected $fillable = [
        'name', 'slug','locale', 'tag_id'
    ];

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
