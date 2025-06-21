<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;


class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public function getRedirectUrl(): string
    {
        return UserResource::getUrl(); // arahkan ke halaman index user
    }

    protected function afterCreate(): void
    {
        Notification::make()
            ->title('User berhasil dibuat!')
            ->success()
            ->send();
    }

    protected function getCreatedNotification(): ?Notification
    {
        return null; // Hilangkan notifikasi bawaan
    }
}

