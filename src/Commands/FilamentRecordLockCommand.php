<?php

namespace AthulSuresh\FilamentRecordLock\Commands;

use Illuminate\Console\Command;

class FilamentRecordLockCommand extends Command
{
    public $signature = 'filament-record-lock';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
