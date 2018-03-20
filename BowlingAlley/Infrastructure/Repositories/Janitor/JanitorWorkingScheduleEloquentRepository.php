<?php declare(strict_types=1);

namespace BowlingAlley\Infrastructure\Repositories\Janitor;

use BowlingAlley\Domain\Repositories\Janitor\JanitorWorkingHoursRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class JanitorWorkingHoursEloquentRepository extends Model implements JanitorWorkingHoursRepository
{
    public function findByDate(Carbon $date)
    {
        // TODO: implement logic to get working schedule
        // $this->where('date', $date);
        return $date;
    }
}
