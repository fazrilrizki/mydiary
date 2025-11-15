<?php

namespace App\Filament\Resources\Diaries\Pages;

use App\Filament\Resources\Diaries\DiaryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDiary extends CreateRecord
{
    protected static string $resource = DiaryResource::class;
}
