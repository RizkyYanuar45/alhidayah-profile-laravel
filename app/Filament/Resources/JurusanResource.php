<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JurusanResource\Pages;
use App\Filament\Resources\JurusanResource\RelationManagers;
use App\Models\Jurusan;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Pages\ListRecords;
use Filament\Pages\Actions\EditAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class JurusanResource extends Resource
{
    protected static ?string $model = Jurusan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // 
                TextInput::make('elearningDKV'),
                TextInput::make('elearningMP'),
                TextInput::make('elearningTAB'),
                TextInput::make('elearningTKR'),
                RichEditor::make('content')
                ->columnSpanFull()
                ->toolbarButtons([
                    'attachFiles',
                    'blockquote',
                    'bold',
                    'bulletlist',
                    'codeBlock',
                    'font',
                    'size',
                    'h2',
                    'h3',
                    'italic',
                    'Link',
                    'orderedList',
                    'redo',
                    'strike',
                    'underline',
                    'undo'
                ]) 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('elearningDKV'),
                Tables\Columns\TextColumn::make('elearningMP'),
                Tables\Columns\TextColumn::make('elearningTAB'),
                Tables\Columns\TextColumn::make('elearningTKR'),
            ])
            ->filters([
                //
            ])
          
            ->actions([
                Tables\Actions\EditAction::make(),
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    
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
            'index' => Pages\ListJurusans::route('/'),
            'create' => Pages\CreateJurusan::route('/create'),
            'edit' => Pages\EditJurusan::route('/{record}/edit'),
        ];
    }
    //menonaktifkan fitur create jurusan baru
    public static function canCreate(): bool
    {
       return false;
    }
  
}
