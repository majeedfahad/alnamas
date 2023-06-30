<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StepsResource\Pages;
use App\Filament\Resources\StepsResource\RelationManagers;
use App\Models\Steps;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StepsResource extends Resource
{
    protected static ?string $model = Steps::class;
    protected static ?string $pluralModelLabel = 'الخطوات';

    protected static ?string $navigationIcon = 'ri-footprint-line';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('count')
                    ->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('default')
                    ->collection('default'),
                Forms\Components\DateTimePicker::make('created_at')
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('المستخدم')
                    ->searchable(),
                Tables\Columns\TextColumn::make('count')
                    ->label('عدد الخطوات')
                    ->sortable(),
                Tables\Columns\IconColumn::make('approved')
                    ->label('مقبول')
                    ->boolean(),
            ])
            ->filters([
        Tables\Filters\Filter::make('today')
            ->query(function (Builder $query) {
                $query->whereDate('created_at', today());
            })->label('اليوم'),
        Tables\Filters\Filter::make('unapproved')
            ->query(function (Builder $query) {
                $query->where('approved', false);
            })->label('غير مقبول'),
    ])
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListSteps::route('/'),
            'create' => Pages\CreateSteps::route('/create'),
            'edit' => Pages\EditSteps::route('/{record}/edit'),
        ];
    }
}
