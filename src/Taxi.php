<?php

/**
 * Class Taxi
 */
class Taxi extends AbstractTaxi
{
    /**
     * Taxi constructor.
     *
     * @param array $stations
     * @param int $currentStation
     * @param int $passengers
     * @param int $capacity
     * @param int $tripStationNumber
     */
    public function __construct(
        $stations = self::DEFAULT_STATIONS,
        $currentStation = self::DEFAULT_CURRENT_STATION,
        $passengers = self::DEFAULT_PASSENGERS,
        $capacity = self::DEFAULT_CAPACITY,
        $tripStationNumber = self::DEFAULT_TRIP_STATION_NUMBER
    ) {
        $this->stations = $stations;
        $this->currentStation = $currentStation;
        $this->passengers = $passengers;
        $this->capacity = $capacity;
        $this->tripStationNumber = $tripStationNumber;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentStation()
    {
        $currentStation = $this->stations[$this->currentStation];
        echo "Current station: $currentStation \n";
        $this->updateCurrentStation();
    }

    /**
     * @inheritdoc
     */
    public function updateCurrentStation()
    {
        if ($this->currentStation == count($this->stations) - 1) {
            echo "Last station. \n";
            $this->currentStation = self::DEFAULT_CURRENT_STATION;
            $this->stations = array_reverse($this->stations);
        }
    }

    /**
     * @inheritdoc
     */
    public function passengersTransfer()
    {
        $passengersOut = rand(0, $this->passengers);
        echo "Passengers to out: $passengersOut \n";

        $this->passengers -= $passengersOut;
        echo "Passengers after out: $this->passengers \n";

        $passengersIn = rand(0, 5);
        echo "Passengers to in: $passengersIn \n";
        $this->passengers += $passengersIn;

        if ($this->passengers >= $this->capacity) {
            $this->passengers = $this->capacity;
        } else {
            echo "Waiting 1 minute. \n";
            sleep(2);
        }
    }

    /**
     * @inheritdoc
     */
    public function nextStation()
    {
        $this->currentStation++;
        $this->tripStationNumber++;
    }
}
