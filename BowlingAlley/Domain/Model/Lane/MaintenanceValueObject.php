<?php declare(strict_types=1);

namespace BowlingAlley\Domain\Model\Lane;

use Illuminate\Support\Carbon;
use Illuminate\Contracts\Support\Arrayable;
use BowlingAlley\Domain\Repositories\Lane\LaneRepository as Lane;

class MaintenanceValueObject implements Arrayable
{
    protected $lane;
    protected $maintenanceDateTime;

    public function __construct(Lane $lane, Carbon $maintenanceDateTime)
    {
        $this->lane = $lane;
        $this->maintenanceDateTime = $maintenanceDateTime;
    }

    public function toArray()
    {
        return [
            'lane_number' => $this->lane->laneNumber,
            'maintenance_datetime' => (string) $this->maintenanceDateTime,
        ];
    }
}
