<?php

namespace Ela\MudCyberpunk\Npcs;

use Ela\MudCyberpunk\Items\BionicArms;
use Jugid\Staurie\Game\Npc;

class Djo extends Npc {

    public function name() : string {
        return 'Djo';
    }

    public function description() : string {
        return "L'oncle Djo";
    }

    public function speak() : string|array {
        if($this->playerHasItem('BionicArms')) {
            return [
                "Maintenant que tu as les bras bioniques, va voir mon fournisseur.....", 
                "heuuu le pharmacien, chercher les medicaments"
            ];
        } else {
            $this->giveItem(new BionicArms());
            return [
                "Eh...",
                "mon petit...",
                "tu vois bien, hein, le vieux Djo, il tient plus. Sans mes cachets, j'suis foutu...",
                "Le souffle me lache, la tete tourne...",
                "Il faut que tu m'aides, vite, sinon demain...",
                "demain je ne suis plus la. Apporte-les-moi, c'est tout ce qui me garde en vie.",
                "Tiens des bras bioniques pour t'aider a traverser la ville pour aller a la \"pharmacie\"."
            ];
        }
    }
}