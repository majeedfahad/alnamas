<?php

namespace App\Filament\Widgets;

use App\Models\Steps;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $maxStepsYesterday = Steps::whereDate('created_at', today()->subDay())
            ->orderBy('count', 'desc')
            ->first();
        return [
            Card::make('عدد المسجلين', User::count()),
            Card::make('عدد الخطوات', Steps::sum('count')),
            Card::make('اعلى خطوات امس', $maxStepsYesterday?->user->name ?? 'لا يوجد')
            ->description($maxStepsYesterday?->count . " خطوة" ?? 'لا يوجد'),
        ];
    }
}
