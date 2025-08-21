<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PatientForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('NIK')
                ->label('NIK')
                    ->required(),
                DatePicker::make('date_of_birth')
                    ->required(),
                Textarea::make('address')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                Select::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->required()->default('male'),
                Textarea::make('allergies'),
            ]);
    }
}
