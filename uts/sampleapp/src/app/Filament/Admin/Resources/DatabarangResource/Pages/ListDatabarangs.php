<?php

namespace App\Filament\Admin\Resources\DatabarangResource\Pages;

use App\Filament\Admin\Resources\DatabarangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDatabarangs extends ListRecords
{
    protected static string $resource = DatabarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
