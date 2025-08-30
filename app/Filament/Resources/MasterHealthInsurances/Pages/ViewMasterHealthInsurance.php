<?php

namespace App\Filament\Resources\MasterHealthInsurances\Pages;

use App\Filament\Resources\MasterHealthInsurances\MasterHealthInsuranceResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMasterHealthInsurance extends ViewRecord
{
    protected static string $resource = MasterHealthInsuranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
