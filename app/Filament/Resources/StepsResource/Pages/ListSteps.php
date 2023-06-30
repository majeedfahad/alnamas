<?php

namespace App\Filament\Resources\StepsResource\Pages;

use App\Filament\Resources\StepsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSteps extends ListRecords
{
    protected static string $resource = StepsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
