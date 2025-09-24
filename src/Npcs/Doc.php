<?php

namespace Ela\MudCyberpunk\Npcs;

use Ela\MudCyberpunk\Items\BionicArms;
use Jugid\Staurie\Game\Npc;

class Doc extends Npc {

    public function name() : string {
        return 'Doc';
    }

    public function description() : string {
        return 'Le doc';
    }

    public function speak() : string|array {
        $money = $this->container->getComponent('money');
        $currentAmount = $money->getAmount();
        $calculatedValue = $currentAmount + 1;
        return $calculatedValue;
    }
}