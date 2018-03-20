<?php declare(strict_types=1);

namespace BowlingAlley\Domain\Repositories\Lane;

interface LaneRepository
{
    public function find(int $laneNumber);
}
