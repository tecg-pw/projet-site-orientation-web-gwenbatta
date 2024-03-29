<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $with= ["status"];
    protected $fillable = [
        'name',
        'firstname',
        'slug',
        'status_id',
        'back_image',
        'back_images',
        'srcset_back',
        'description',
        'avatar',
        'avatars' ,
        'srcset',
        'email',
        'is_admin',
        'newsletter',
        'password',
    ];
    public function tutos(): BelongsToMany
    {
        return $this->belongsToMany(Tuto::class, 'tuto_user', 'user_id', 'tuto_id');
    }
    public function commentsLike(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class, 'comment_user', 'user_id', 'comment_id');
    }

    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class,'status_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        "avatars" => 'array',
        "back_images" => 'array',
        "srcset" => 'array',
        "srcset_back" => 'array'
    ];
}
