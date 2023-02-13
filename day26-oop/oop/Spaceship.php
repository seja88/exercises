<?php

class Spaceship
{
    public ?string $name = null;
    public ?string $position = null;
    public ?string $direction = null;

    /**
     * cruising speed in thousands of km per second
     * always an integer!
     */
    public int|float $cruising_speed = 0;

    public function __construct(?string $name = null)
    {
        $this->name = $name;
    }

    public function setPosition(string $position) : void
    {
        $this->position = $position;

        if ($position == 'Vulcan') {
            $this->issueDiplomaticWarning();
        }
    }

    public function setDirection(string $direction) : void
    {
        $this->direction = $direction;
    }

    public function setCruisingSpeed(int|float $speed) : void
    {
        if ($speed > 10 || $speed < 0) {
            // stop execution of the script
            // with an error message
            throw new Exception('Invalid speed');
        }

        $this->cruising_speed = $speed;
    }

    public function getName() : string
    {
        return ucfirst($this->name) ?: 'Unknown vessel';
    }

    public function getCruisingSpeed($unit = 'km') : string
    {
        switch ($unit) {
            default:
            case 'km':
                return $this->cruising_speed * 1000 . ' km/s';
            case 'miles':
                return $this->cruising_speed * 1000 / 1.6 * 3600 . ' mph';
        }
    }
}


