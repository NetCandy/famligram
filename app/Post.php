<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 */
class Post extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likable');
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('newest-first', function (Builder $builder) {
            $builder->latest();
        });
    }
}
