<?php

namespace Ela\MudCyberpunk\Items;

use Jugid\Staurie\Game\Item_Equippable;

class BionicArms extends Item_Equippable {

    public function name() : string {
        return 'BionicArms';
    }

    public function description(): string {
        return 'Des bras bionics';
    }

    public function body_part(): string { 
        return 'arms';
    }

    public function statistics(): array
    {
        return [
            'attack'=> 5
        ];
    }
}