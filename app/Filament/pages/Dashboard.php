<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
// use App\Models\Product;
// use App\Models\User;

class Dashboard extends BaseDashboard
{
    protected function getViewData(): array
    {
        return [
            // 'totalProducts' => Product::count(),
            // 'totalUsers' => User::count(),
        ];
    }
}
