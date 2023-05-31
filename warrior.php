<?php
/* A practice on inheritance for PHP classes. */
class Warrior
{
    public function printGear($gear)
    {
        echo 'Warrior is issued a(n) ' . $gear . PHP_EOL;
    }
    
    public function printStatus()
    {
        echo 'Warrior status is confirmed.' . PHP_EOL;
    }
}

class Archer extends Warrior
{
    public function printGear($gear)
    {
        echo 'Archer is issued a(n) ' . $gear . PHP_EOL;
    }
}

$warrior = new Warrior();
$archer = new Archer();
$warrior->printGear('dagger'); // Warrior is issued a(n) dagger
$warrior->printStatus();       // Warrior status is confirmed.
$archer->printGear('bow'); // Archer is issued a(n) bow
$archer->printStatus();       // Warrior status is confirmed.
