<?php

namespace Ela\MudCyberpunk\Items;

use Jugid\Staurie\Game\Item_Equippable;

class Rrhinoshield extends Item_Equippable {
    public function name() : string {
        return 'Rrhinoshield';
    }

    public function description(): string {
        return 'Un plastron';
    }

    public function body_part(): string { 
        return 'plastron';
    }

    public function statistics(): array
    {
        return [
            'defense'=> 5
        ];
    }
}