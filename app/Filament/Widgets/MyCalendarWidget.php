<?php

namespace App\Filament\Widgets;

use App\Models\Diary;
use Guava\Calendar\Filament\CalendarWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;
use Guava\Calendar\ValueObjects\FetchInfo;

class MyCalendarWidget extends CalendarWidget
{
    protected function getEvents(FetchInfo $info): Collection | array | Builder {
       return Diary::query();
    }
}
