<?php

namespace Twoh4services\LaravelReferral\Commands;

use Illuminate\Console\Command;

class LaravelReferralCommand extends Command
{
    public $signature = 'laravel-referral';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
