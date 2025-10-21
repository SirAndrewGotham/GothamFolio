<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateResume extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-resume';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $locales = ['en', 'fr', 'es', 'de']; // your languages

        foreach ($locales as $locale) {
            $html = $this->generateResumeForLocale($locale);
            file_put_contents(
                resource_path("views/pages/resume/{$locale}.html"),
                $html
            );
        }

        $this->info('Resume files updated for all languages');
    }
}
