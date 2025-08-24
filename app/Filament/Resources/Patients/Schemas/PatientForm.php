<?php

namespace App\Filament\Resources\Patients\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
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
                    ->minLength(16)
                    ->maxLength(17)
                    ->label('NIK')
                    ->required(),
                Group::make()->schema([
                    TextInput::make('phone_number')
                        ->tel()
                        ->minLength(10)
                        ->maxLength(15)
                        ->required(),
                    DatePicker::make('date_of_birth')
                        ->required(),
                    Select::make('gender')
                        ->options([
                            'male' => 'Male',
                            'female' => 'Female',
                        ])
                        ->required()->default('male'),
                ])->columns(3)->columnSpanFull(),
                Textarea::make('address')
                    ->required(),
                Textarea::make('allergies'),
            ])
            ->columns([
                'default' => 1,
                'md' => 2,
                'lg' => 2,
                'xl' => 2,
            ]);
    }
}
