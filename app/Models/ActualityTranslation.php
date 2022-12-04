<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActualityTranslation extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'actualitytranslations';
    protected $dates = ['date'];

    protected $fillable = [
        'name', 'slug' , 'locale', 'excerpt', 'description', 'lieu', 'link','gallery','actuality_id'
    ];

    public function actuality(): BelongsTo
    {
        return $this->belongsTo(Actuality::class);
    }
}
