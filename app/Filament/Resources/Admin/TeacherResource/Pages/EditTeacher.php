<?php

namespace App\Filament\Resources\Admin\TeacherResource\Pages;

use App\Filament\Resources\Admin\TeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTeacher extends EditRecord
{
    protected static string $resource = TeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
