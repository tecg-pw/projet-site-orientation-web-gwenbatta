<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Software extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'softwares';

    protected $fillable = [
        'id'
    ];
    protected $with = ["translation"];

    public function translation(): HasMany
    {
        return $this->hasMany(SoftwareTranslation::class);
    }
    public function offers(): BelongsToMany
    {
        return $this->belongsToMany(Offer::class,'offer_software','software_id','offer_id');
    }
}
