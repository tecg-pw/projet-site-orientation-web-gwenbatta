<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class CoordinateTranslation extends Model
{
    use HasFactory , SoftDeletes;

    protected $table = 'coordinatetranslations';

    protected $fillable = [
        'organization', 'locale', 'employee_name', 'employee_firstname' , 'phone', 'job', 'mail'
    ];

    public function coordinate(): BelongsTo
    {
        return $this->belongsTo(Coordinate::class);
    }
}
