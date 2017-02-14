<?php

/**
 * Class AbstractTaxi
 */
abstract class AbstractTaxi implements TaxiInterface
{
    const DEFAULT_STATIONS = [];
    const DEFAULT_CURRENT_STATION = 0;
    const DEFAULT_PASSENGERS = 0;
    const DEFAULT_CAPACITY = 0;
    const DEFAULT_STATION_NUMBER = 20;
    const DEFAULT_TRIP_STATION_NUMBER = 0;

    /**
     * @var array
     */
    protected $stations;

    /**
     * @var integer
     */
    protected $currentStation;

    /**
     * @var integer
     */
    protected $passengers;

    /**
     * @var integer
     */
    protected $capacity;

    /**
     * @var integer
     */
    protected $stationsNumber;

    /**
     * @var integer
     */
    protected $tripStationNumber;
    /**
     * @inheritdoc
     */
    abstract public function getCurrentStation();

    /**
     * @inheritdoc
     */
    abstract public function updateCurrentStation();

    /**
     * @inheritdoc
     */
    public function openDoor()
    {
        echo "Open door. \n";
    }

    /**
     * @inheritdoc
     */
    public function closeDoor()
    {
        echo "Close door! \n\n";
    }

    /**
     * @inheritdoc
     */
    abstract public function passengersTransfer();

    /**
     * @inheritdoc
     */
    abstract public function nextStation();

    /**
     * Set taxi capacity.
     *
     * @param int $capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Set stations.
     *
     * @param array $stations
     *
     * @return $this
     */
    public function setStations(array $stations)
    {
        $this->stations = $stations;

        return $this;
    }

    /**
     * Get current station counter.
     *
     * @return int
     */
    public function getCurrentStationCounter()
    {
        return $this->currentStation;
    }

    /**
     * Get stations number.
     *
     * @return int
     */
    public function getStationsNumber()
    {
        return self::DEFAULT_STATION_NUMBER;
    }

    /**
     * Get global stations counter.
     *
     * @return int
     */
    public function getTripStationNumber()
    {
        return $this->tripStationNumber;
    }
}
