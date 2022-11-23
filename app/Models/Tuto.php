<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tuto extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['created_at'];
    protected $fillable = [
        'name', 'slug' , 'link', 'excerpt','languages'
    ];
    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'tuto_person', 'tuto_id', 'user_id');
    }
}
