<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Country;
use App\Models\Employee;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $us = Country::where('country_code','US')->withCount('employees')->first();
        $uk = Country::where('country_code','UK')->withCount('employees')->first();
        return [
            Card::make('All Employees',Employee::all()->count()),
            Card::make('UK Employees',$uk ? $uk->employees_count : 0),
            Card::make('US Employees',$us ? $us->employees_count : 0),
        ];
    }
}
