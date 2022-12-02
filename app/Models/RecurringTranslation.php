<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RecurringTranslation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'recurringtranslations';
    protected $fillable = [
        'name', 'slug' ,'locale',  'description'
    ];

    public function recurring(): BelongsTo
    {
        return $this->belongsTo(Recurring::class);
    }
}
