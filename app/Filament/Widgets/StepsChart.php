<?php

namespace App\Filament\Widgets;

use App\Models\Steps;
use Filament\Widgets\BarChartWidget;
use Filament\Widgets\LineChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class StepsChart extends BarChartWidget
{
    protected static ?string $heading = 'الخطوات';
    protected int | string | array $columnSpan = 'full';

    protected function getData(): array
    {
        $data = Trend::model(Steps::class)
            ->between(
                start: now()->startOfWeek(),
                end: now()->endOfWeek(),
            )
        ->perDay()
        ->sum('count');
        return [
            'datasets' => [
                [
                    'label' => 'الخطوات',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'backgroundColor' => '#4c51bf',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }
}
