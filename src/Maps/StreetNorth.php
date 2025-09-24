<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class StreetNorth extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(1,0);
    }

    public function name() : string {
        return 'Street';
    }

    public function description() : string {
        return 'eee';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}