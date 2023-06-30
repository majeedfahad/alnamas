<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\Action::make('update_role')
            ->label('ازالة المصوتين')
            ->action('removeVoters')
            ->requiresConfirmation()
        ];
    }

    public function removeVoters(): void
    {
        $users = User::where('role', 'voter')->get();
        foreach ($users as $user) {
            $user->makeAsUser();
        }
    }
}
