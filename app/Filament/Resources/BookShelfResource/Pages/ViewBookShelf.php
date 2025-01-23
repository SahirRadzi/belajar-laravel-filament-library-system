<?php

namespace App\Filament\Resources\BookShelfResource\Pages;

use App\Filament\Resources\BookShelfResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBookShelf extends ViewRecord
{
    protected static string $resource = BookShelfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
