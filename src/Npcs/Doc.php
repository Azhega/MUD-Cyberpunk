<?php

namespace Ela\MudCyberpunk\Npcs;

use Ela\MudCyberpunk\Items\BionicArms;
use Jugid\Staurie\Game\Npc;

class Doc extends Npc
{

    public function name(): string
    {
        return 'Doc';
    }

    public function description(): string
    {
        return "C'est le doc le moins populaire de la ville, mais c'est le seul à vendre certain produit...";
    }

    public function speak(): string|array
    {
        $money = $this->container->getComponent('money');
        $currentAmount = $money->getAmount();
        $calculatedValue = $currentAmount + 1;

        return [
            "Ehhhhh",
            "Salut toi !",
            'Ton oncle m\'a dit que tu allais venir pour ses "Medocs"',
            "Je peux t'en vendre pour $calculatedValue Cryptos, ca te va ?",
            "Comment ca tu as que $currentAmount Cryptos ?",
            "Ohhhhhhh",
            "Bah mince alors tu ne pourras pas sauver l'autre pourriture !",
            "Allez casse toi !",
            "Tu veux te battre ?"
        ];
    }
}