<?php

require 'AutoLoader.php';

$loader = new AutoLoader();
$loader->register();

$taxi = new Taxi;
$taxi
    ->setCapacity(5)
    ->setStations([
        "Marylebone",
        "Euston Square",
        "City Thameslink",
        "Regent’s Park",
        "Liverpool Street"
    ])
;

while ($taxi->getTripStationNumber() < $taxi->getStationsNumber()) {
    $taxi->getCurrentStation();
    $taxi->updateCurrentStation();
    $taxi->openDoor();
    $taxi->passengersTransfer();
    $taxi->closeDoor();
    $taxi->nextStation();
}
