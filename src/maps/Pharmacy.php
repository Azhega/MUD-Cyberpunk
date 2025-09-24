<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;
use Ela\MudCyberpunk\Npcs\Doc;

class Pharmacy extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(2,2);
    }

    public function name() : string {
        return 'Pharmacy';
    }

    public function description() : string {
        return 'Une "pharmacie" presque comme les autres...';
    }

    public function messageMove() : string {
        return "Vous arrivez à la pharmacie, derrière le comptoir, le docteur lève les yeux vers vous et vous observe avec attention.";
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