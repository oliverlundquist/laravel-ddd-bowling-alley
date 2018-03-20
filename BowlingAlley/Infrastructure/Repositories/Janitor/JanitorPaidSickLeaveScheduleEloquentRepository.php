<?php declare(strict_types=1);

namespace BowlingAlley\Infrastructure\Repositories\Janitor;

use BowlingAlley\Domain\Repositories\Janitor\JanitorPaidSickLeaveScheduleRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class JanitorPaidSickLeaveScheduleEloquentRepository extends Model implements JanitorPaidSickLeaveScheduleRepository
{
    public function findByDate(Carbon $date)
    {
        // TODO: implement logic to get working schedule
        // $this->where('date', $date);
        return $date;
    }
}
