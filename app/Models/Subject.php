<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subject extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['created_at'];
    protected $with = ['comments', 'user','tag'];
    protected $withCount = ['comments'];
    protected $fillable = [
        'subject', 'slug' , 'description', 'tag_id', 'resolved', 'user_id', 'user_id'
    ];
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
