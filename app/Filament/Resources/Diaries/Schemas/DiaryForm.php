<?php

namespace App\Filament\Resources\Diaries\Schemas;

use App\Enums\FeelingStatus;
use App\Models\Diary;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class DiaryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->placeholder('Entry title.')
                            ->columnSpanFull(),
                        RichEditor::make('content')
                            ->required()
                            ->placeholder('Entry content.')
                            ->columnSpanFull(),
                        DatePicker::make('diary_at')
                            ->native(false)
                            ->required()
                            ->default(now())
                            ->placeholder('Entry diary at.')
                            ->columnSpan(1),
                        Select::make('feeling_status')
                            ->options(FeelingStatus::class)
                            ->placeholder('Entry feeling status.')
                            ->required()
                            ->columnSpan(1),
                        SpatieMediaLibraryFileUpload::make(Diary::MEDIA_COLLECTION_NAME)
                            ->label('Attach Image')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->collection(Diary::MEDIA_COLLECTION_NAME)
                            ->directory(Diary::MEDIA_COLLECTION_NAME)
                            ->multiple()
                            ->panelLayout('grid')
                            ->maxSize(env('MAX_SIZE_UPLOAD'))
                            ->columnSpan(2),
                    ])
                    ->columnSpanFull()
                    ->columns(2)
            ]);
    }
}
