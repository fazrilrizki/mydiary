<?php

namespace App\Models;

use App\Enums\FeelingStatus;
use Guava\Calendar\Contracts\Eventable;
use Guava\Calendar\ValueObjects\CalendarEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model implements Eventable
{
    use SoftDeletes;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'diary_at' => 'datetime',
        'feeling_status' => FeelingStatus::class,
    ];

    public function toCalendarEvent(): CalendarEvent
    {
        // For eloquent models, make sure to pass the model to the constructor
        return CalendarEvent::make()
            ->title($this->title)
            ->start($this->diary_at)
            ->end($this->diary_at)
            ->allDay(true);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'diary_tags');
    }
}
