<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutoTranslation extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tutotranslations';
    protected $dates = ['created_at'];
    protected $fillable = [
        'name', 'slug' ,'locale', 'link', 'excerpt','languages'
    ];
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'tuto_person', 'tuto_id', 'user_id');
    }

    public function tuto(): BelongsTo
    {
        return $this->belongsTo(Tuto::class);
    }
}
