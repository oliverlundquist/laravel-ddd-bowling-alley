<?php declare(strict_types=1);

namespace BowlingAlley\Domain\Model\Janitor;

use Illuminate\Support\Carbon;
use BowlingAlley\Domain\Repositories\Janitor\JanitorWorkingHoursRepository;
use BowlingAlley\Domain\Repositories\Janitor\JanitorPaidSickLeaveScheduleRepository;
use BowlingAlley\Domain\Model\Lane\PinsetterMaintenanceEntity;
use BowlingAlley\Domain\Exception\JanitorOffHoursException;
use BowlingAlley\Domain\Exception\MaintenanceAlreadyOnItsWayException;
use BowlingAlley\Domain\Model\Lane\MaintenanceValueObject as Maintenance;
use BowlingAlley\Domain\Repositories\Lane\LaneRepository as Lane;

class JanitorAggregate
{
    private $workingHours;
    private $sickLeave;
    private $maintenance;

    public function __construct(JanitorWorkingHoursRepository $workingHours, JanitorPaidSickLeaveScheduleRepository $sickLeave, PinsetterMaintenanceEntity $maintenance)
    {
        $this->workingHours = $workingHours;
        $this->sickLeave = $sickLeave;
        $this->maintenance = $maintenance;
    }

    public function isAtWork(Carbon $date): bool
    {
        $workingHours = $this->workingHours->findByDate($date);
        $sickLeave    = $this->sickLeave->findByDate($date);

        // TODO: add logic to check if we're inside of the working hours
        // TODO: add logic to check if janitor is taking a sick leave day

        return true;
    }

    public function scheduleMaintainance(Lane $lane, Carbon $maintenanceDateTime)
    {
        if ( ! $this->isAtWork($maintenanceDateTime)) {
            throw new JanitorOffHoursException('Janitor not at work');
        }

        if ($this->maintenance->nextMaintenance() < Carbon::now()->addMinutes(15)) {
            throw new MaintenanceAlreadyOnItsWayException('There\'s already a scheduled maintenance within 15 minutes, please hold on!');
        }

        return $this->maintenance->add(new Maintenance($lane, $maintenanceDateTime));
    }
}
