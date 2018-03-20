<?php declare(strict_types=1);

namespace BowlingAlley\Domain\Repositories\Janitor;

use Illuminate\Support\Carbon;

interface JanitorPaidSickLeaveScheduleRepository
{
    public function findByDate(Carbon $date);
}
