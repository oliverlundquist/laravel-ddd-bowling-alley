<?php declare(strict_types=1);

namespace BowlingAlley\Application\Service\Janitor\Cleaning;

class WipeCafeteriaCoffeeTableRequest
{
    protected $tableNumber;

    public function __construct($tableNumber)
    {
        $this->tableNumber = $tableNumber;
    }

    public function getTableNumber()
    {
        return $this->tableNumber;
    }
}
