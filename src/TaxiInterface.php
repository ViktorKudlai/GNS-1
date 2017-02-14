<?php

/**
 * Interface TaxiInterface
 */
interface TaxiInterface
{
    /**
     * Show current station name.
     *
     * @return mixed
     */
    public function getCurrentStation();

    /**
     * Update current station.
     *
     * @return mixed
     */
    public function updateCurrentStation();

    /**
     * Show open door message.
     *
     * @return mixed
     */
    public function openDoor();

    /**
     * Show close door message.
     *
     * @return mixed
     */
    public function closeDoor();

    /**
     * Update passengers counter.
     *
     * @return mixed
     */
    public function passengersTransfer();

    /**
     * Update station counters.
     *
     * @return mixed
     */
    public function nextStation();
}
