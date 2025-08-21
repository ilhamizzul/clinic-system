<?php

namespace App\Filament\Resources\MasterHealthInsurances\Pages;

use App\Filament\Resources\MasterHealthInsurances\MasterHealthInsuranceResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMasterHealthInsurances extends ListRecords
{
    protected static string $resource = MasterHealthInsuranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
