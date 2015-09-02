<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Runs code checking tools
     */
    function check()
    {
        $this->taskExec('bin/phpcs --standard=psr2 app/')
            ->run();

        $this->taskExec('bin/phpmd app/ text codesize,unusedcode,naming')
            ->run();

        $this->taskExec('bin/phpcpd app/')
            ->run();
    }

    /**
     * Runs test suite
     */
    function test()
    {
        $this->taskPhpUnit()
            ->run();
    }

    /**
     * Refreshes DB and seeds records
     */
    function dbReinstall()
    {
        $this->taskExec('php artisan db:drop')
            ->run();

        $this->taskExec('php artisan db:create')
            ->run();

        $this->taskExec('php artisan migrate:refresh --seed')
            ->run();
    }
}
