<?php

namespace Interviewer\Console\Commands;

use Illuminate\Console\Command;

class DbDropCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:drop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drops database. Warning: should be never executed in production environment.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $db = \DB::connection()->getDatabaseName();
        \DB::statement("DROP DATABASE `$db`");

        $this->info("Database $db has been dropped.");
    }
}
