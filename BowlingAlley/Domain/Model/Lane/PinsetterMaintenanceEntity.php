<?php declare(strict_types=1);

namespace BowlingAlley\Domain\Model\Lane;

use BowlingAlley\Domain\Repositories\Lane\PinsetterMaintenanceScheduleRepository;
use BowlingAlley\Domain\Model\Lane\MaintenanceValueObject as Maintenance;

class PinsetterMaintenanceEntity
{
    private $repository;

    public function __construct(PinsetterMaintenanceScheduleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function nextMaintenance()
    {
        return $this->repository->first();
    }

    public function add(Maintenance $maintenance): Maintenance
    {
        return $this->repository->create($maintenance);
    }
}
