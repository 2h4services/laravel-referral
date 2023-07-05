<?php

namespace Twoh4services\LaravelReferral;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Twoh4services\LaravelReferral\Commands\LaravelReferralCommand;

class LaravelReferralServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-referral')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-referral_table')
            ->hasCommand(LaravelReferralCommand::class);
    }
}
