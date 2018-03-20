<?php declare(strict_types=1);

namespace BowlingAlley\Application\Service\Janitor\Maintenance;

use BowlingAlley\Domain\Model\Janitor\JanitorAggregate;
use BowlingAlley\Domain\Repositories\Lane\LaneRepository;

class RequestPinsetterMaintenanceService
{
    private $janitor;
    private $laneRepository;

    public function __construct(JanitorAggregate $janitor, LaneRepository $laneRepository)
    {
        $this->janitor = $janitor;
        $this->laneRepository = $laneRepository;
    }

    public function execute(RequestPinsetterMaintenanceRequest $request)
    {
        $laneNumber      = $request->getLaneNumber();
        $maintenanceDate = $request->getMaintenanceDate();

        $lane = $this->laneRepository->find($laneNumber);

        return $this->janitor->scheduleMaintainance($lane, $maintenanceDate);
    }
}
