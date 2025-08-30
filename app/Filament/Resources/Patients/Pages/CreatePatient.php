<?php

namespace App\Filament\Resources\Patients\Pages;

use App\Filament\Resources\Patients\PatientResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreatePatient extends CreateRecord
{
    protected static string $resource = PatientResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return Notification::make()
            ->title('Patient created successfully')
            ->body('The patient record has been created successfully.')
            ->success();
    }
}
