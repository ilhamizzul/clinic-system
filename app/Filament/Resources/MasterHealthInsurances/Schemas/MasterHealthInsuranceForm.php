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
                    ->required(),
                TextInput::make('contact_info')
                    ->required(),
            ]);
    }
}
