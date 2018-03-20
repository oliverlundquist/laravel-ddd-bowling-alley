<?php declare(strict_types=1);

namespace BowlingAlley\Infrastructure\Repositories\Lane;

use Illuminate\Database\Eloquent\Model;
use BowlingAlley\Domain\Repositories\Lane\LaneRepository;

class LaneRepositoryEloquentRepository extends Model implements LaneRepository
{
    protected $laneNumber;
    protected $guarded = ['id'];

    public function find(int $laneNumber)
    {
        return $this->newInstance(['laneNumber' => $laneNumber]);
    }
}
