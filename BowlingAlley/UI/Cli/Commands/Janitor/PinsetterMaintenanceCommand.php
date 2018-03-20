<?php declare(strict_types=1);

namespace BowlingAlley\UI\Cli\Commands\Janitor;

use Illuminate\Console\Command;
use BowlingAlley\Application\Service\Janitor\Maintenance\RequestPinsetterMaintenanceRequest;
use BowlingAlley\Application\Service\Janitor\Maintenance\RequestPinsetterMaintenanceService;

class PinsetterMaintenanceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'janitor:pinsetter-maintenance {lane_number} {maintenance_datetime?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Request maintenance on pinsetter';

    /**
     * Execute the console command.
     *
     * @param  RequestPinsetterMaintenanceService $service
     * @return mixed
     */
    public function handle(RequestPinsetterMaintenanceService $service)
    {
        $laneNumber = $this->argument('lane_number');
        $maintenanceDateTime = $this->argument('maintenance_datetime');
        $requestArgs = is_null($maintenanceDateTime) ? [$laneNumber] : [$laneNumber, $maintenanceDateTime];

        $request = new RequestPinsetterMaintenanceRequest(...$requestArgs);
        $service->execute($request);

        $this->info('Requesting maintenance for pinsetter on lane: ' . $laneNumber);
    }
}
