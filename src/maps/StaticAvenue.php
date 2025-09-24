<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\SDF;

class StaticAvenue extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(1,2);
    }

    public function name() : string {
        return 'StaticAvenue';
    }

    public function description() : string {
        return 'eee';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new SDF()];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}