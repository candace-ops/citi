<?php

namespace App\Connection;

use App\Concerns\Enum\Resolvable;
use ArchTech\Enums\Values;
use BackedEnum;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum Status: string implements HasLabel, HasColor, HasIcon
{
    use Resolvable, Values;

    case Pending = 'pending';
    case Allowed = 'allowed';
    case Blocked = 'blocked';

    public function getLabel(): string | Htmlable | null
    {
        return match ($this) {
            self::Pending => 'Pending',
            self::Allowed => 'Allowed',
            self::Blocked => 'Blocked',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Pending => 'warning',
            self::Allowed => 'success',
            self::Blocked => 'danger',
        };
    }

    public function getIcon(): string | BackedEnum | Htmlable | null
    {
        return match ($this) {
            self::Pending => Heroicon::Clock,
            self::Allowed => Heroicon::Check,
            self::Blocked => Heroicon::XCircle,
        };
    }
}
