<?php

namespace App\Filament\Resources\Patients\Schemas;

use Carbon\Carbon;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PatientInfoList
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name')->label('Patient Name')->columnSpan(3),
                TextEntry::make('NIK')->label('NIK')->columnSpan(3),
                TextEntry::make('gender')->label('Patient Gender')->columnSpan(3),
                TextEntry::make('date_of_birth')->label('Date of Birth')->columnSpan(2),
                TextEntry::make('age')->label('Age')
                    ->getStateUsing(function ($record) {
                        return Carbon::parse($record->date_of_birth)->age;
                    })->columnSpan(1),
                TextEntry::make('phone_number')->label('Phone Number')->columnSpan(3),
                TextEntry::make('allergies')->label('Allergies')->columnSpan(3),
                TextEntry::make('address')->label('Patient Address')->columnSpanFull(),
                Section::make('Insurance Information')->schema([
                    RepeatableEntry::make('insurances')
                        ->hiddenLabel()
                        ->schema([
                            TextEntry::make('insurance_name')->label('Insurance Name'),
                            TextEntry::make('pivot.insurance_number')->label('Insurance Number'),
                            TextEntry::make('pivot.effective_date')->label('Effective Date'),
                            TextEntry::make('pivot.expiration_date')->label('Expiration Date'),
                            TextEntry::make('pivot.expiration_date')
                                ->label('Expired')
                                ->formatStateUsing(function ($record) {
                                    $expiration = $record->pivot->expiration_date ?? null;
                                    return $expiration && $expiration < now()->toDateString() ? 'Yes' : 'No';
                                })
                                ->color(function ($record) {
                                    $expiration = $record->pivot->expiration_date ?? null;
                                    return $expiration && $expiration < now()->toDateString() ? 'danger' : 'success';
                                }),
                        ])
                        ->columns(5)
                        ->extraAttributes(['style' => 'max-height: 250px; overflow-y: auto;'])
                ])->columnSpanFull(),
            ])->columns([
                'default' => 1,
                'md' => 6,
                'lg' => 6,
                'xl' => 6,
            ]);
    }
}
