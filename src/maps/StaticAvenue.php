<?php

namespace Ela\MudCyberpunk\Maps;

use Jugid\Staurie\Component\Map\Blueprint;
use Jugid\Staurie\Game\Position\Position;

class StaticAvenue extends Blueprint {
    private Position $position;

    public function __construct() {
        $this->position = new Position(1,2);
    }

    public function name() : string {
        return 'StaticAvenue';
    }

    public function description() : string {
        return "StaticAvenue est de base l'un des endroits les plus peuplés de NightCity";
    }

    public function messageMove() : string {
        return "Vous arrivez au quartier StaticAvenue, il n'y a que 200 ou 300 personnes, l'endroit est calme.";
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