<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BestImageResource\Pages;
use App\Filament\Resources\BestImageResource\RelationManagers;
use App\Models\BestImage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BestImageResource extends Resource
{
    protected static ?string $model = BestImage::class;
    protected static ?string $pluralModelLabel = 'الصور';

    protected static ?string $navigationIcon = 'far-images';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\SpatieMediaLibraryFileUpload::make('default')
                    ->collection('default'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name'),
                Tables\Columns\TextColumn::make('likes_count')
                    ->label('الاعجابات')
                    ->sortable(),
                Tables\Columns\TextColumn::make('votes_count')
                    ->label('التصويتات')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_rating')
                    ->label('التقييم النهائي')
                    ->getStateUsing(fn($record) => $record->getTotalRating())
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\Filter::make('today')
                    ->query(function (Builder $query) {
                        $query->whereDate('created_at', today());
                    })->label('اليوم'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('make_as_best')
                    ->label('ترشيح كأفضل صورة')
                    ->action(fn($record) => $record->makeAsBest())
                    ->requiresConfirmation()
                    ->color('success')
                    ->visible(fn($record) => !$record->isBestImageChosedToday()),
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
            'index' => Pages\ListBestImages::route('/'),
            'edit' => Pages\EditBestImage::route('/{record}/edit'),
        ];
    }
}
