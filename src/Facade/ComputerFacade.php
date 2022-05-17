<?php

namespace Khoatran\Unlock\Facade;

class ComputerFacade
{
    private CPUFacade $cpu;
    private HardDriveFacade $hardDrive;
    private BatteryFacade $battery;

    public function __construct()
    {
        $this->battery = new BatteryFacade();
        $this->cpu = new CPUFacade();
        $this->hardDrive = new HardDriveFacade();
    }

    /**
     * @return string
     */
    public function getInfo(): string
    {
        return $this->cpu->getInfo() . " - " . $this->hardDrive->getInfo() . " " . $this->battery->getInfo();
    }
}
