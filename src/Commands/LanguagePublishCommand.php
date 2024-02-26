<?php

namespace HassanKerdash\Laravel\Locales\Commands;

use Illuminate\Support\Facades\File;
use Illuminate\Console\Command;

class LanguagePublishCommand extends Command
{
    protected $signature = 'lang:locale {--lang=* : The languages to publish}';

    protected $description = 'Publish language files to resources/lang directory.';

    public function handle(): void
    {
        $langs = $this->option('lang');

        if (empty($langs)) {
            // If no languages are specified, get all directories in Locales folder
            $langs = File::directories(__DIR__ . '/../Locales');
        }

        foreach ($langs as $lang) {
            // Extract language code from the directory path
            $lang = basename($lang);

            $sourcePath = __DIR__ . '/../Locales/' . $lang;
            $destinationPath = resource_path('lang/' . $lang);

            // Ensure the source directory exists
            if (File::isDirectory($sourcePath)) {
                // Ensure the destination directory exists, if not, create it
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath, 0777, true, true);
                }

                // Copy the language files from source to destination directory
                File::copyDirectory($sourcePath, $destinationPath);

                $this->info('Published language: ' . $lang);
            } else {
                $this->error("The language '$lang' is not available.");
            }
        }
    }
}
