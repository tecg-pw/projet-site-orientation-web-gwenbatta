<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id'
    ];
    protected $with = ["translation","partner","language","software"];

    public function translation(): HasMany
    {
        return $this->hasMany(OfferTranslation::class);
    }

    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }
    public function language(): BelongsToMany
    {
        return $this->belongsToMany(Language::class,'language_offer','offer_id','language_id');
    }
    public function software(): BelongsToMany
    {
        return $this->belongsToMany(Software::class,'offer_software','offer_id','software_id');
    }

}
