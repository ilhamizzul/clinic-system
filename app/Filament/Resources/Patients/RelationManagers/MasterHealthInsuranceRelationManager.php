<?php

namespace App\Filament\Resources\Patients\RelationManagers;

use Filament\Actions\AttachAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Date;

class MasterHealthInsuranceRelationManager extends RelationManager
{
    protected static string $relationship = 'insurances';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('insurance_name')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('insurance_name')
            ->columns([
                TextColumn::make('insurance_name')
                    ->searchable(),
                TextColumn::make('pivot.insurance_number')
                    ->label('Insurance Number')
                    ->searchable(),
                TextColumn::make('pivot.effective_date')
                    ->label('Effective Date')
                    ->date(),
                TextColumn::make('pivot.expiration_date')
                    ->label('Expiration Date')
                    ->date(),
                TextColumn::make('pivot.expiration_date')
                    ->label('Expired')
                    ->formatStateUsing(function ($record) {
                        $expiration = $record->pivot->expiration_date ?? null;
                        return $expiration && $expiration < now()->toDateString() ? 'Yes' : 'No';
                    }),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //CreateAction::make(),
                AttachAction::make()
                    ->label('Add Insurance')
                    ->modalHeading('Add Insurance')
                    ->icon('heroicon-s-plus')
                    ->schema(fn (AttachAction $action): array => [
                        $action->getRecordSelect()
                            ->label('Insurance')
                            // ->searchable()
                            // ->loadingMessage('Loading insurance...')
                            // ->preload()
                            // ->getOptionLabelFromRecordUsing(fn ($record) => $record->insurance_name)
                            ->required(),
                        TextInput::make('insurance_number')->numeric()->required(),
                        Group::make()->schema(
                            [
                                DatePicker::make('effective_date')
                                    ->maxDate(fn (callable $get) => $get('expiration_date'))
                                    ->required(),
                                DatePicker::make('expiration_date')
                                        ->minDate(fn (callable $get) => $get('effective_date'))
                                        ->required()
                            ]
                        )->columns(2)
                    ]
                ),
            ])
            ->recordActions([
                EditAction::make()->color('warning'),
                DetachAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DetachBulkAction::make(),
                ]),
            ]);
    }
}
