<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $modelLabel = 'المستخدمين';
    protected static ?string $pluralModelLabel = 'المستخدمين';

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('الاسم')
                ->searchable(),
                Tables\Columns\TextColumn::make('role')
                ->enum([
                    'user' => 'مستخدم',
                    'voter' => 'مصوت',
                    'admin' => 'مدير',
                ])
                ->label('الصلاحية'),
            ])
            ->filters([
                Tables\Filters\Filter::make('voter')
                    ->label('مصوت')
                    ->query(fn(Builder $query) => $query->where('role', 'voter')),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('make_as_voter')
                    ->label('تحويل الى مصوت')
                    ->action(fn($record) => $record->makeAsVoter())
                    ->requiresConfirmation()
                    ->color('success')
                    ->visible(fn($record) => $record->isUser()),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
