<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PersonTranslation extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'persontranslations';
    protected $dates =['begin','end'];
    protected $casts = [
        'avatars' => 'array',
        'srcset' => 'array',
    ];
    protected $fillable = [
        'name', 'firstname', 'slug', 'status','isTeacher', 'avatar', 'description', 'link_portfolio', 'link_github', 'linkedin', 'instagram', 'mail', 'job', 'begin', 'end','people_id'
    ];

    public function person(): BelongsTo
    {
        return $this->belongsTo(People::class, 'people_id');
    }

    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class, 'partner_person', 'people_id', 'partner_id');
    }
}
