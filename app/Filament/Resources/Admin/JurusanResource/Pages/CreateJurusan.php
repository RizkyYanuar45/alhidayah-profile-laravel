<?php

namespace App\Filament\Resources\Admin\JurusanResource\Pages;

use App\Filament\Resources\JurusanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJurusan extends CreateRecord
{
    protected static ?string $navigationLabel = "Jurusan";
    protected static string $resource = JurusanResource::class;
}
