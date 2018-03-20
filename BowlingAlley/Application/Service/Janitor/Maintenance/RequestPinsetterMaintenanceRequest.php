<?php declare(strict_types=1);

namespace BowlingAlley\Application\Service\Janitor\Maintenance;

use Illuminate\Support\Carbon;

class RequestPinsetterMaintenanceRequest
{
    protected $laneNumber;
    protected $maintenanceDateTime;

    public function __construct($laneNumber, $maintenanceDateTime = null)
    {
        $this->laneNumber = $laneNumber;
        $this->maintenanceDateTime = Carbon::parse($maintenanceDateTime) ?? Carbon::now();
    }

    public function getLaneNumber()
    {
        return $this->laneNumber;
    }

    public function getMaintenanceDate()
    {
        return $this->maintenanceDateTime;
    }
}
