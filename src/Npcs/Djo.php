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
        } if ($this->playerHasItem('Bioflex')) {
            return [
                "File-moi ça !",
                "...",
                "Tu te fous de moi ?! Ce ne sont pas les bons !",
                "Tu m'apportes de la came de rue au lieu de mes vrais cachets ?!",
                "J'vais te montrer ce que ça fait de souffrir, petit con !",
                "VIENS LÀ !"
            ];
        }else {
            $this->giveItem(new BionicArms());
            return [
                "Eh...",
                "Mon petit...",
                "Tu vois bien, hein, le vieux Djo, il tient plus. Sans mes cachets, j'suis foutu...",
                "Le souffle me lâche, ma tête tourne...",
                "Il faut que tu m'aides, vite, sinon demain...",
                "Demain je ne serai plus là. Apporte-les-moi, c'est tout ce qui me garde en vie.",
                "Tiens des bras bioniques pour t'aider à traverser la ville pour aller à la \"pharmacie\"."
            ];
        }
    }
}