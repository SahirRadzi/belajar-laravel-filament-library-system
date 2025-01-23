<?php

namespace App\Filament\Resources\BookShelfResource\Pages;

use App\Filament\Resources\BookShelfResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookShelf extends CreateRecord
{
    protected static string $resource = BookShelfResource::class;
}
