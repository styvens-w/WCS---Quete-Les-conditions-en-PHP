<?php

$weapons = ['fists', 'whip', 'gun'];

$opponentWeapon = $weapons[random_int(0, 2)];

$indyWeapon = "???";

switch ($opponentWeapon) {
    case 'fists':
        $indyWeapon = "gun";
        break;
    case 'whip':
        $indyWeapon = "fists";
        break;
    case 'gun':
        $indyWeapon = 'whip';
        break;
}

echo "L'adversaire a choisi ''$opponentWeapon'', Indiana Jones choisi donc ''$indyWeapon''.";