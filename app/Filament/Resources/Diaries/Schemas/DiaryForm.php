<?php

namespace App\Filament\Resources\Diaries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
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
                            ->placeholder('Entry diary at.'),
                        TagsInput::make('tags')
                            ->required()
                    ])
                    ->columnSpanFull()
                    ->columns(2)
            ]);
    }
}
