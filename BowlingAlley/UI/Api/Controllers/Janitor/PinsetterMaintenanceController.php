<?php declare(strict_types=1);

namespace BowlingAlley\UI\Api\Controllers\Janitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use BowlingAlley\Application\Service\Janitor\Maintenance\RequestPinsetterMaintenanceService;
use BowlingAlley\Application\Service\Janitor\Maintenance\RequestPinsetterMaintenanceRequest;

class PinsetterMaintenanceController extends Controller
{
    public function immediateMaintenance(Request $request, RequestPinsetterMaintenanceService $service)
    {
        $this->validate($request, ['lane_number' => 'required']);

        $immediateMaintenanceRequest = new RequestPinsetterMaintenanceRequest(
            $request->input('lane_number')
        );

        $result = $service->execute($immediateMaintenanceRequest);

        return response()->json($result, $code = 200);
    }

    public function scheduleMaintenance(Request $request, RequestPinsetterMaintenanceService $service)
    {
        $this->validate($request, ['lane_number' => 'required', 'maintenance_datetime' => 'required']);

        $scheduledMaintenanceRequest = new RequestPinsetterMaintenanceRequest(
            $request->input('lane_number'),
            $request->input('maintenance_datetime')
        );

        $result = $service->execute($scheduledMaintenanceRequest);

        return response()->json($result, $code = 200);
    }
}
