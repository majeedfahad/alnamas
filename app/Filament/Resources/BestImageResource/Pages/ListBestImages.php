<?php

namespace App\Filament\Resources\BestImageResource\Pages;

use App\Filament\Resources\BestImageResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBestImages extends ListRecords
{
    protected static string $resource = BestImageResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
