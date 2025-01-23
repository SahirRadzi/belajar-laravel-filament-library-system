<?php

namespace App\Filament\Resources\BookShelfResource\Pages;

use App\Filament\Resources\BookShelfResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookShelves extends ListRecords
{
    protected static string $resource = BookShelfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
