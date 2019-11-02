<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $visible = [
        'user_id',
        'likable_id',
        'user'
    ];

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('with-user', function (Builder $builder) {
            $builder->with('user');
        });
    }
}
