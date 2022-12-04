<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartnerTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'partnertranslations';

    protected $fillable = [
        'name', 'slug' ,'locale', 'mail', 'logo', 'adresse', 'locality','locality_number', 'description', 'site_link', 'link_facebook','link_linkedin','link_instagram','members'
    ];
    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }
    public function person(): BelongsToMany
    {
        return $this->belongsToMany(People::class, 'partner_person', 'partner_id', 'people_id');
    }
    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }
}
