<?php declare(strict_types=1);

namespace BowlingAlley\UI\Web\Controllers\Janitor;

use App\Http\Controllers\Controller;
use BowlingAlley\Application\Service\Janitor\Maintenance\NextPinsetterMaintenanceDateService;

class PinsetterMaintenanceController extends Controller
{
    public function nextMaintenanceDate(NextPinsetterMaintenanceDateService $service)
    {
        return response()->view(
            $view = 'Janitor.PinsetterMaintenanceView',
            $data = ['maintenance_date' => $service->execute()]
        );
    }
}
