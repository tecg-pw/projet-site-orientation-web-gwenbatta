<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'slug' , 'mail', 'logo', 'adresse', 'locality','locality_number', 'description', 'site_link', 'link_facebook','link_linkedin','link_instagram','members'
    ];
    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }
    public function person(): BelongsToMany
    {
        return $this->belongsToMany(People::class, 'partner_person', 'partner_id', 'people_id');
    }
}
