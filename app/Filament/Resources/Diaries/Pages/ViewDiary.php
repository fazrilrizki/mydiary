<?php

namespace App\Filament\Resources\Diaries\Pages;

use App\Filament\Resources\Diaries\DiaryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewDiary extends ViewRecord
{
    protected static string $resource = DiaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
