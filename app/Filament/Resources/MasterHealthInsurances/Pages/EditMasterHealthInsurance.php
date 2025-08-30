<?php

namespace App\Filament\Resources\MasterHealthInsurances\Pages;

use App\Filament\Resources\MasterHealthInsurances\MasterHealthInsuranceResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditMasterHealthInsurance extends EditRecord
{
    protected static string $resource = MasterHealthInsuranceResource::class;

    protected function getUpdatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Health Insurance updated successfully')
            ->body('The Health Insurance record has been updated successfully.')
            ->success();
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
