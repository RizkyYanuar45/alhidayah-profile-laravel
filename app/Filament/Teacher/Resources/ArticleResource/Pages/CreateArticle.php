<?php

namespace App\Filament\Teacher\Resources\ArticleResource\Pages;

use App\Filament\Teacher\Resources\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
}
