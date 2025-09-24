<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\Djo;

class Apartment extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(0,0);
    }

    public function name() : string {
        return 'Apartment';
    }

    public function description() : string {
        return "L'apartment de l'oncle Djo";
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new Djo()];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}