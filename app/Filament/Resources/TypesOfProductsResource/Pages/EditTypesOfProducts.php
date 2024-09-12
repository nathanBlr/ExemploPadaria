<?php

namespace App\Filament\Resources\TypesOfProductsResource\Pages;

use App\Filament\Resources\TypesOfProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypesOfProducts extends EditRecord
{
    protected static string $resource = TypesOfProductsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
