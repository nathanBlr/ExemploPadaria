<?php

namespace App\Filament\Resources\TypesOfProductsResource\Pages;

use App\Filament\Resources\TypesOfProductsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypesOfProducts extends ListRecords
{
    protected static string $resource = TypesOfProductsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
