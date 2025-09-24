<?php

namespace Ela\MudCyberpunk\Items;

use Jugid\Staurie\Game\Item_Equippable;

class CyberVodka extends Item_Equippable {

    public function name() : string {
        return 'CyberVodka';
    }

    public function description(): string {
        return 'Une magnifique et puissante bouteille de Vodka';
    }

    public function body_part(): string { 
        return 'arms';
    }

    public function statistics(): array
    {
        return [
            'attack'=> 10
        ];
    }
}