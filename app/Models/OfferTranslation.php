<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class OfferTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table ='offertranslations';

    protected $dates =['created_at'];

    protected $fillable = [
        'name', 'slug' ,'locale', 'description',  'languages','softwares','others','pdf'
    ];

    public function offer(): BelongsTo
    {
        return $this->belongsTo(Offer::class);
    }
}
