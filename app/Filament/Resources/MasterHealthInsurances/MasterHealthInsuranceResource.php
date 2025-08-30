<?php

namespace App\Filament\Resources\MasterHealthInsurances;

use App\Filament\Resources\MasterHealthInsurances\Pages\CreateMasterHealthInsurance;
use App\Filament\Resources\MasterHealthInsurances\Pages\EditMasterHealthInsurance;
use App\Filament\Resources\MasterHealthInsurances\Pages\ListMasterHealthInsurances;
use App\Filament\Resources\MasterHealthInsurances\Pages\ViewMasterHealthInsurance;
use App\Filament\Resources\MasterHealthInsurances\Schemas\MasterHealthInsuranceForm;
use App\Filament\Resources\MasterHealthInsurances\Schemas\MasterHealthInsuranceInfolist;
use App\Filament\Resources\MasterHealthInsurances\Tables\MasterHealthInsurancesTable;
use App\Models\MasterHealthInsurance;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MasterHealthInsuranceResource extends Resource
{
    protected static ?string $model = MasterHealthInsurance::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShieldCheck;
    protected static string|UnitEnum|null $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Health Insurance';
    protected static ?string $modelLabel = 'Health Insurance';

    public static function form(Schema $schema): Schema
    {
        return MasterHealthInsuranceForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MasterHealthInsuranceInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        // Ignore the intelephense error
        return MasterHealthInsurancesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMasterHealthInsurances::route('/'),
            'create' => CreateMasterHealthInsurance::route('/create'),
            'view' => ViewMasterHealthInsurance::route('/{record}'),
            'edit' => EditMasterHealthInsurance::route('/{record}/edit'),
        ];
    }
}
