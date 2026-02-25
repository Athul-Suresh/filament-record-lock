<?php

namespace AthulSuresh\FilamentRecordLock\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AthulSuresh\FilamentRecordLock\FilamentRecordLock
 */
class FilamentRecordLock extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AthulSuresh\FilamentRecordLock\FilamentRecordLock::class;
    }
}
