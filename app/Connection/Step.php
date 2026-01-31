<?php

namespace App\Connection;

use App\Concerns\Enum\Resolvable;
use ArchTech\Enums\Values;
use BackedEnum;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

enum Step: string implements HasIcon, HasLabel
{
    use Resolvable, Values;

    case Login = 'login';
    case LoginLoading = 'login-loading';
    case LoginSuccessful = 'login-successful';
    case LoginRejected = 'login-rejected';
    case Support = 'support';

    public function getLabel(): string | Htmlable | null
    {
        return match ($this) {
            self::Login => 'Login',
            self::LoginLoading => 'Login Loading',
            self::LoginRejected => 'Login Rejected',
            self::LoginSuccessful => 'Login Successful',
            self::Support => 'Support',
        };
    }

    public function getIcon(): string | BackedEnum | Htmlable | null
    {
        return match ($this) {
            self::Login => Heroicon::LockClosed,
            self::LoginLoading => Heroicon::ArrowPath,
            self::LoginRejected => Heroicon::XCircle,
            self::LoginSuccessful => Heroicon::CheckCircle,
            self::Support => Heroicon::ChatBubbleBottomCenterText,
        };
    }
}
