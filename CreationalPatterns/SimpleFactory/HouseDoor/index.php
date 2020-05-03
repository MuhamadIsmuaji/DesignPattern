<?php
require_once 'DoorFactory.php';

// make door with size 50x50
$firstDoor = DoorFactory::makeDoor(50, 50);
echo "First door width: {$firstDoor->getWidth()} <br/>";
echo "First door height: {$firstDoor->getHeight()}";

echo "<br><br>";

// make door with size 100x100
$secondDoor = DoorFactory::makeDoor(100, 100);
echo "Second door width: {$secondDoor->getWidth()} <br/>";
echo "Second door height: {$secondDoor->getHeight()}";