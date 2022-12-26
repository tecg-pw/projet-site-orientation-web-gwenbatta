<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['created_at'];
    protected $withCount=["userLike"];
    protected $fillable = [
        'content', 'slug' , 'like', 'user_id','subject_id'
    ];
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function userLike(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'comment_user', 'comment_id', 'user_id');
    }
}
