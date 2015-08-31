<?php

namespace Interviewer\Console\Commands;

use Illuminate\Console\Command;

class DbCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates application DB.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // @todo: fix issue http://stackoverflow.com/questions/32313385/database-creation-command-in-laravel-5-1

        $dbType = \Config::get('database.default');
        $dbName = \Config::get('database.connections')[$dbType]['database'];
        \DB::statement("CREATE DATABASE `$dbName`");

        $this->info("Database $dbName has been created.");
    }
}
