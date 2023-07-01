<?php

namespace App\Filament\Resources\StepsResource\Pages;

use App\Filament\Resources\StepsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSteps extends EditRecord
{
    protected static string $resource = StepsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('Approve')
                ->label('قبول')
                ->action(fn() => $this->record->approve())
                ->requiresConfirmation()
                ->visible(fn() => $this->record->isPending())
                ->color('success'),
            Actions\Action::make('Reject')
                ->label('رفض')
                ->action(fn() => $this->record->reject())
                ->requiresConfirmation()
                ->visible(fn() => $this->record->isPending()),
        ];
    }
}
