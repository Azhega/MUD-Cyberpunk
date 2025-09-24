<?php

namespace Ela\MudCyberpunk\Npcs;

use Ela\MudCyberpunk\Items\BionicArms;
use Jugid\Staurie\Game\Npc;

class SDF extends Npc {

    private string $name;

    public function __construct() {
        $names = [
            "Zero", "Nyx", "Vex", "Rogue", "Ashen",
            "Cipher", "Nova", "Jinx", "Chrome", "Axel",
            "Blade", "Raven", "Neon", "Glitch", "Echo",
            "Kairo", "Shade", "Orion", "Flux", "Reaper",
            "Zeke", "Nyro", "Havoc", "Venom", "Ghost",
            "Kali", "Vector", "Riot", "Talon", "Vapor",
            "Sable", "Onyx", "Drift", "Haze", "Crash",
            "Ivy", "Volt", "Rune", "Skull", "Pulse",
            "Raze", "Shard", "Lynx", "Dusk", "Trix",
            "Vexx", "Aria", "NovaX", "Byte", "Spectre"
        ];

        $this->name = $names[array_rand($names)];
    }

    public function name() : string {
        return $this->name;
    }

    public function description() : string {
        return "SDF de NightCity";
    }

    public function speak() : string {
        $lines = [
            ["He...", "T'as pas une puce a gratter ?", "Ma tete explose..."],
            ["Les neons...", "Ils me parlent, mec...", "Ils chuchotent des nombres..."],
            ["J'ai vendu mon sommeil contre du chrome...", "Tu veux en acheter ?"],
            ["Le beton fond sous mes pieds, regarde !", "Regarde !"],
            ["Shhh...", "Faut pas qu'ils m'entendent...", "Les drones me suivent partout..."],
            ["Encore un credit et je me branche direct dans le reve..."],
            ["Tu sens ca ?", "Le reseau...", "Il coule dans mes veines..."],
            ["Donne-moi un verre d'alcool synthe, j'ai la gorge en feu..."],
            ["Je me rappelle plus de mon nom...", "Mais eux, eux ils savent..."],
            ["Le futur, il est deja la, frere...", "Et il nous devore..."]
        ];

        return $lines[array_rand($lines)];
    }
}