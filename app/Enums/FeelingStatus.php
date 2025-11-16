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
            self::HAPPY => '😄 Happy',
            self::SAD => '😢 Sad',
            self::ANGRY => '😠 Angry',
            self::NEUTRAL => '😐 Neutral',
            self::CALM => '😌 Calm',
            self::EXCITED => '🤩 Excited',
            self::GRATEFUL => '🙏 Grateful',
            self::TIRED => '😴 Tired',
        };
    }
}
