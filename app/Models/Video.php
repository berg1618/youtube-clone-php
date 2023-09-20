<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'id',
        'name',
        'user_id',
        'description',
        "path",
        "created_at",
        "updated_at",
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
