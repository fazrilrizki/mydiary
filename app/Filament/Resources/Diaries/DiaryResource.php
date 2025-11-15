<?php

namespace App\Filament\Resources\Diaries;

use App\Filament\Resources\Diaries\Pages\CreateDiary;
use App\Filament\Resources\Diaries\Pages\EditDiary;
use App\Filament\Resources\Diaries\Pages\ListDiaries;
use App\Filament\Resources\Diaries\Pages\ViewDiary;
use App\Filament\Resources\Diaries\Schemas\DiaryForm;
use App\Filament\Resources\Diaries\Schemas\DiaryInfolist;
use App\Filament\Resources\Diaries\Tables\DiariesTable;
use App\Models\Diary;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DiaryResource extends Resource
{
    protected static ?string $model = Diary::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBookOpen;

    public static function form(Schema $schema): Schema
    {
        return DiaryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return DiaryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DiariesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDiaries::route('/'),
            'create' => CreateDiary::route('/create'),
            'view' => ViewDiary::route('/{record}'),
            'edit' => EditDiary::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
