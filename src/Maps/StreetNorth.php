<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\SDF;

class StreetNorth extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(2,1);
    }

    public function name() : string {
        return 'StreetNorth';
    }

    public function description() : string {
        return "c'est un bon endroit pour dormir quand on dort à la rue";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new SDF(), new SDF()];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}