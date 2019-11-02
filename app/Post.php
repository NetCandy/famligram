<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 */
class Post extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(
            'latest-with-authors-comments-likes',
            function (Builder $builder) {
                $builder->with('author', 'comments', 'likes')
                    ->withCount('likes')
                    ->addSelect(
                        [
                            'liked_by_user' => Like::select('user_id')
                                ->where('user_id', '=', auth()->user()->id)
                                ->whereColumn('likable_id', '=', 'posts.id')
                        ]
                    )
                    ->latest();
            }
        );
    }

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
}
