<?php

namespace App\Filament\Resources\BestImageResource\Pages;

use App\Filament\Resources\BestImageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBestImage extends EditRecord
{
    protected static string $resource = BestImageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
//            Actions\Action::make('Approve')
//                ->label('Activate')
//                ->action(fn() => $this->record->activate())
//                ->requiresConfirmation()
//                ->visible(fn() => $this->record->isNotActive()),
//            Actions\Action::make('deactivate')
//                ->label('Deactivate')
//                ->action(fn() => $this->record->deactivate())
//                ->requiresConfirmation()
//                ->visible(fn() => $this->record->isActive()),
        ];
    }
}
