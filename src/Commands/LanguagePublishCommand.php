<?php

namespace HassanKerdash\Laravel\Locales\Commands;

use Illuminate\Console\Command;

class LanguagePublishCommand extends Command
{
    /** @var string */
    protected $signature = 'lang:locale
    {--lang=* : The languages to publish}';

    /** @var string */
    protected $description = 'language publish to resources/lang directory.';

    public function handle(): void
    {
        $langs = $this->option('lang');

        if (empty($langs)) {
            $this->info('No languages specified. Nothing to publish.');
            return;
        }

        foreach ($langs as $lang) {
            $this->callSilent('vendor:publish', [
                '--provider' => 'HassanKerdash\Laravel\Locales\Providers\LocalesServiceProvider',
                '--tag' => 'lang',
                '--force' => true,
                '--lang' => $lang,
            ]);
            $this->info('Publishing language: ' . $lang);
        }
    }
}
