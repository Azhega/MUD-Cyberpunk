<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\SDF;

class NeonAlley extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(1,0);
    }

    public function name() : string {
        return 'NeonAlley';
    }

    public function description() : string {
        return 'NeonAlley est la rue la plus éclairée de NightCity';
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