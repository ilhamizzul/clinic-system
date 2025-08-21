<?php

namespace App\Filament\Resources\MasterHealthInsurances\Pages;

use App\Filament\Resources\MasterHealthInsurances\MasterHealthInsuranceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMasterHealthInsurance extends EditRecord
{
    protected static string $resource = MasterHealthInsuranceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
