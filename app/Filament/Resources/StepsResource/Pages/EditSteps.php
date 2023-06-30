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
            Actions\DeleteAction::make(),
            Actions\Action::make('Approve')
                ->label('قبول')
                ->action(fn() => $this->record->approve())
                ->requiresConfirmation()
                ->visible(fn() => !$this->record->isApproved())
            ->color('success'),
            Actions\Action::make('unApprove')
                ->label('رفض')
                ->action(fn() => $this->record->disapprove())
                ->requiresConfirmation()
                ->visible(fn() => $this->record->isApproved()),
        ];
    }
}
