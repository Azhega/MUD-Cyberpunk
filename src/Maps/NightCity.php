<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Items\{BionicArms, CyberVodka};

class NightCity extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(0,1);
    }

    public function name() : string {
        return 'NightCity';
    }

    public function description() : string {
        return 'Oulala c est une ville nulle';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [new BionicArms(), new CyberVodka()];
    }

    public function monsters() : array {
        return [];
    }
}