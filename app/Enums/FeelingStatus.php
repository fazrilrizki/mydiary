<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum FeelingStatus: string implements HasLabel
{
    case HAPPY = 'Happy';
    case SAD = 'Sad';
    case ANGRY = 'Angry';
    case NEUTRAL = 'Neutral';
    case CALM = 'Calm';
    case EXCITED = 'Excited';
    case GRATEFUL = 'Grateful';
    case TIRED = 'Tired';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::HAPPY => '😄 Senang',
            self::SAD => '😢 Sedih',
            self::ANGRY => '😠 Marah',
            self::NEUTRAL => '😐 Biasa Saja',
            self::CALM => '😌 Tenang',
            self::EXCITED => '🤩 Bersemangat',
            self::GRATEFUL => '🙏 Bersyukur',
            self::TIRED => '😴 Lelah',
        };
    }
}
