<?php

namespace App\Filament\Resources\BookShelfResource\Pages;

use App\Filament\Resources\BookShelfResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookShelf extends EditRecord
{
    protected static string $resource = BookShelfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
