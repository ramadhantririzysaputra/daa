<?php

namespace App\Filament\Admin\Resources\DatabarangResource\Pages;

use App\Filament\Admin\Resources\DatabarangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDatabarang extends EditRecord
{
    protected static string $resource = DatabarangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
