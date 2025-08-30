<?php

namespace App\Filament\Resources\MasterHealthInsurances\Pages;

use App\Filament\Resources\MasterHealthInsurances\MasterHealthInsuranceResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateMasterHealthInsurance extends CreateRecord
{
    protected static string $resource = MasterHealthInsuranceResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Health Insurance created successfully')
            ->body('The Health Insurance record has been created successfully.')
            ->success();
    }
}
