<?php

namespace Jugid\Staurie\Component\Character\CoreFunctions;

use Jugid\Staurie\Component\Console\AbstractConsoleFunction;

class FightFunction extends AbstractConsoleFunction {

    public function action(array $args) : void {
        $this->getContainer()->dispatcher()->dispatch('character.fight', ['target' => $args[0]]);
    }

    public function name() : string {
        return 'fight';
    }

    public function description() : string {
        return 'Command used to fight a monster or NPC on a map';
    }

    public function getArgs() : int|array {
        return 1;
    }
}