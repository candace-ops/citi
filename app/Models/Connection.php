<?php

namespace App\Models;

use App\Connection\Status;
use App\Connection\Step;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class Connection extends Model
{
    use HasUuids, Prunable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'ip',
        'user_agent',
        'device',
        'browser',
        'os',
        'country',
        'step',
        'status',
        'payload',
        'last_seen_at',
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => Status::Pending,
        'step' => Step::Login,
        'payload' => '{}',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => Status::class,
            'step' => Step::class,
            'last_seen_at' => 'datetime',
            'payload' => 'array',
        ];
    }

    /**
     * Get the prunable model query.
     */
    public function prunable(): Builder
    {
        return static::where('status', Status::Pending)
            ->where('last_seen_at', '<=', now()->subWeek());
    }

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::creating(function (Connection $connection) {
            $connection->last_seen_at ??= now();
            $connection->name = str(random_name())->slug();

            while (self::where('name', $connection->name)->exists()) {
                $connection->name = str(random_name())->slug();
            }
        });
    }
}
