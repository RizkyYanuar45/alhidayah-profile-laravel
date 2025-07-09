<?php

namespace App\Filament\Resources\Admin;

use App\Filament\Resources\Admin\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Set;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

use function Laravel\Prompts\form;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;
    protected static ?string $navigationLabel = 'Menu Artikel';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $activeNavigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
       
        return $form
        ->schema([
            Forms\Components\TextInput::make('name')
                ->required()
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                ->live(debounce: 2500)
                ->maxLength(255),

            // Forms\Components\TextInput::make('slug')
            //     ->disabled(),

            Forms\Components\FileUpload::make('thumbnail')
            ->image()
            ->disk('public')
            ->directory('thumbnails'),

            /** 
             * category_id = foreign key 
             * category = relationship method name (define on models)
             * name = field what you want to take
             * */
            Forms\Components\Select::make('category_id')
                ->relationship('category', 'name')
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('teacher_id')
                ->relationship('teacher', 'name')
                ->nullable()
                ->searchable()
                ->preload()
                ->required(),

            Forms\Components\Select::make('is_featured')
                ->options([
                    'featured' => 'Featured',
                    'not_featured' => 'Not Featured'
                ])
                ->required(),

            Forms\Components\RichEditor::make('content')
                ->required()
                ->columnSpanFull()
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletList',
                    'codeBlock',
                    'h2',
                    'h3',
                    'italic',
                    'link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo',
                ])
        ]);
    }
    
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('name')->searchable(),

                Tables\Columns\TextColumn::make('is_featured')
                ->badge()->color(fn(string $state): string => match($state){
                    'featured' => 'success',
                    'not_featured' => 'danger'
                }),
                TextColumn::make('category.name'),
                ImageColumn::make('thumbnail')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
