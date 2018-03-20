<?php declare(strict_types=1);

namespace BowlingAlley\Domain\Repositories\Lane;

use BowlingAlley\Domain\Model\Lane\MaintenanceValueObject as Maintenance;

interface PinsetterMaintenanceScheduleRepository
{
    public function first();
    public function create(Maintenance $maintenance);
}
