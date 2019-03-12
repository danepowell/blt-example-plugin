<?php

namespace BltExamplePlugin\Blt\Plugin\Commands;

use Acquia\Blt\Robo\BltTasks;

class MyCustomCommands extends BltTasks
{
    /**
     * @command example:command-one
     */
    public function commandOne() { }

    /**
     * @command example:command-two
     */
    public function commandTwo() { }
}