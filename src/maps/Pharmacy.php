<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\Doc;

class Pharmacy extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(0,1);
    }

    public function name() : string {
        return 'Pharmacy';
    }

    public function description() : string {
        return 'Bienvenue à la pharmacie.';
    }

    public function position() : Position {
        return $this->position;
    }

    public function npcs() : array {
        return [new Doc()];
    }

    public function items() : array {
        return [];
    }

    public function monsters() : array {
        return [];
    }
}