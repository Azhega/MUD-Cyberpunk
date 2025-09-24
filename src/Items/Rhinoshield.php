<?php

namespace Ela\MudCyberpunk\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Rhinoshield extends Item_Equippable {
    public function name() : string {
        return 'Rhinoshield';
    }

    public function description(): string {
        return 'Une Relique antique qui est indestructible, RHINOSHIELD !';
    }

    public function body_part(): string { 
        return 'shield';
    }

    public function statistics(): array
    {
        return [
            'defense' => 5
        ];
    }
}