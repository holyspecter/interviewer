<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see http://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    function check()
    {
        $this->taskExec('bin/phpcs --standard=psr2 app/')
            ->run();

        $this->taskExec('bin/phpmd app/ text codesize,unusedcode,naming')
            ->run();

        $this->taskExec('bin/phpcpd app/')
            ->run();
    }

    function test()
    {
        $this->taskPhpUnit()
            ->run();
    }
}
