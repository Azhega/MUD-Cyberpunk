<?php

use Jugid\Staurie\Component\Character\MainCharacter;
use Jugid\Staurie\Component\Console\Console;
use Jugid\Staurie\Component\Introduction\Introduction;
use Jugid\Staurie\Component\Inventory\Inventory;
use Jugid\Staurie\Component\Level\Level;

use Jugid\Staurie\Component\Map\Map;

use Jugid\Staurie\Component\Menu\Menu;
use Jugid\Staurie\Component\Money\Money;
use Jugid\Staurie\Component\PrettyPrinter\PrettyPrinter;
use Jugid\Staurie\Staurie;

require_once __DIR__.'/../vendor/autoload.php';

$staurie = new Staurie('My game');
$staurie = new Staurie('Cyberpunk');
$staurie->register([
    Console::class,
    PrettyPrinter::class,
    MainCharacter::class,
    Inventory::class,
    Level::class
]);

$container = $staurie->getContainer();

$menu = $container->registerComponent(Menu::class);
$menu->configuration([
    'text'=> 'Bienvenue a NightCity',
    'labels'=> [
        'new_game' => "Commencer l'aventure",
        'quit'=> 'Quitter le jeu',
    ]
]);

$map = $container->registerComponent(Map::class);
$map->configuration([
    'directory'=>__DIR__.'/maps',
    'namespace'=>'Ela\MudCyberpunk\Maps', 
    'navigation'=>true,
    'map_enable'=>true,
    'compass_enable'=>true
]);

$introduction = $container->registerComponent(Introduction::class);
$introduction->configuration([
    'text'=>[
        'Votre oncle a besoin de vous, allez lui parler pour en savoir plus.',
        ''
    ],
    'title'=>'Chapter 1 : Les médoc de Djo',
    'scrolling'=>false
]);

$money = $container->registerComponent(Money::class);
$money->configuration([
    'name' => 'Crypto',
    'start_with' => 0
]);

$staurie->run();