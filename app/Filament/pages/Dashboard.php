<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Models\Article;
use App\Models\Banner;
use Illuminate\Contracts\Support\Htmlable;

class Dashboard extends BaseDashboard
{
    public int $articlesCount;
    public int $activeBannersCount;

    public function mount()
    {
        // Hitung jumlah artikel
        $this->articlesCount = Article::count();

        // Hitung jumlah banner dengan is_active = 'active'
        $this->activeBannersCount = Banner::where('is_active', 'active')->count();
    }

    public function viewData(): array
    {
        return array_merge(parent::viewData(), [
            'articlesCount' => $this->articlesCount,
            'activeBannersCount' => $this->activeBannersCount,
        ]);
    }

    public function getTitle(): string | Htmlable
    {
        return 'Dashboard Kustom';
    }
}
