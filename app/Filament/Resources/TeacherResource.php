<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeacherResource\Pages;
use App\Filament\Resources\TeacherResource\RelationManagers;
use App\Models\Teacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeacherResource extends Resource
{
    protected static ?string $model = Teacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                  //
                  Forms\Components\TextInput::make('name')
                  ->required()
                  ->maxLength(255),
                  // ->afterStateUpdated(function ($state, callable $set) {
                  //     // Mengisi slug secara otomatis saat name diubah
                  //     $set('slug', Str::slug($state));
                  // }),
  
                  Forms\Components\TextInput::make('jabatan')
                  ->required()
                  ->maxLength(255),
  
                  // Forms\Components\TextInput::make('slug')
                  // ->disabled()->default(fn ($record) => $record ? $record->slug : ''),
                  
  
                  Forms\Components\FileUpload::make('avatar')
                    ->disk('public')
                    ->directory('avatars')
                    ->image()
                    ->required()
            ]);
    }
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\ImageColumn::make('avatar'),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTeachers::route('/'),
            'create' => Pages\CreateTeacher::route('/create'),
            'edit' => Pages\EditTeacher::route('/{record}/edit'),
        ];
    }
}
