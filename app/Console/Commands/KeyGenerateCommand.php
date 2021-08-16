<?php

namespace App\Console\Commands;



use Illuminate\Console\Command;
use Illuminate\Support\Str;
class KeyGenerateCommand extends Command
{
    protected $signature = 'key:generate';

    protected $description = 'Set the application key';

    public function handle()
    {
        $key = $this->generateRandomKey();

        file_put_contents(base_path('.env'), preg_replace(
            '/^APP_KEY=[\w]*/m',
            'APP_KEY='.$key,
            file_get_contents(base_path('.env'))
        ));

        $this->info("Application key [$key] set successfully.");
    }

    protected function generateRandomKey()
    {
        return Str::random(32);
    }
}
