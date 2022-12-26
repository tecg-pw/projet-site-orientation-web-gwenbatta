<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tuto extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ["translation","user"];
    protected $fillable = [
        'id'
    ];
    public function translation(): HasMany
    {
        return $this->hasMany(TutoTranslation::class);
    }

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'tuto_user', 'tuto_id', 'user_id');
    }
}
