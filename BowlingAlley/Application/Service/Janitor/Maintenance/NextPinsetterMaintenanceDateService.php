<?php declare(strict_types=1);

namespace BowlingAlley\Application\Service\Janitor\Maintenance;

use BowlingAlley\Domain\Model\Lane\PinsetterMaintenanceEntity;

class NextPinsetterMaintenanceDateService
{
    private $maintenance;

    public function __construct(PinsetterMaintenanceEntity $maintenance)
    {
        $this->maintenance = $maintenance;
    }

    public function execute()
    {
        return $this->maintenance->nextMaintenance();
    }
}
