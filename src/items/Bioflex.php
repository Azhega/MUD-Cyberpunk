<?php

namespace Ela\MudCyberpunk\Items;

use Jugid\Staurie\Game\Item;

class Bioflex extends Item {

    public function name() : string {
        return 'Bioflex';
    }

    public function description(): string {
        return 'Miam miam le Bioflex';
    }

    public function statistics(): array
    {
        return [
            'Anti Cyberpsychose'=> 15
        ];
    }
}