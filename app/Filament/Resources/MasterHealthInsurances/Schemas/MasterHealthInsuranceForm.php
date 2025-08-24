<?php

namespace App\Filament\Resources\MasterHealthInsurances\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MasterHealthInsuranceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('insurance_name')
                    ->required()
                    ->minLength(3)
                    ->maxLength(50),
                TextInput::make('contact_info')
                    ->required()
                    ->numeric()
                    ->minLength(10)
                    ->maxLength(15),
            ]);
    }
}
