<?php declare(strict_types=1);

namespace BowlingAlley\Infrastructure\Repositories\Lane;

use BowlingAlley\Domain\Repositories\Lane\PinsetterMaintenanceScheduleRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use BowlingAlley\Domain\Model\Lane\MaintenanceValueObject as Maintenance;

class PinsetterMaintenanceScheduleEloquentRepository extends Model implements PinsetterMaintenanceScheduleRepository
{
    public function first()
    {
        // TODO: get date from repository
        return Carbon::create($year = 2050, $month = 1, $day = 1, $hour = 0, $minute = 0, $second = 0);
    }

    public function create(Maintenance $data)
    {
        // TODO: store data to data store
        return $data;
    }
}
