<?php

namespace App\Filament\Resources\Diaries\Pages;

use App\Filament\Resources\Diaries\DiaryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDiaries extends ListRecords
{
    protected static string $resource = DiaryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
