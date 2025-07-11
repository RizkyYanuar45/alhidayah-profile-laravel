<?php

namespace App\Filament\Resources\Admin\ArticleResource\Pages;

use App\Filament\Resources\Admin\ArticleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateArticle extends CreateRecord
{
    protected static string $resource = ArticleResource::class;
}
