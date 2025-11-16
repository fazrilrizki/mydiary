<?php

namespace App\Models;

use App\Enums\FeelingStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'diary_at' => 'datetime',
        'feeling_status' => FeelingStatus::class,
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'diary_tags');
    }
}
