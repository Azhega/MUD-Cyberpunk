<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\SDF;

class SmogStreet extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(0,2);
    }

    public function name() : string {
        return 'SmogStreet';
    }

    public function description() : string {
        return 'Une rue plutôt sympathique comparée aux autres...';
    }

    public function messageMove() : string {
        return "Vous arrivez au quartier SmogStreet sur le trottoir, un gang de sans-abri vous dévisage avec insistance.";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new SDF(), new SDF(), new SDF()];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}