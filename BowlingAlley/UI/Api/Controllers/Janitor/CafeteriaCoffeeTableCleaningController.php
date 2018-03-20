<?php declare(strict_types=1);

namespace BowlingAlley\UI\Api\Controllers\Janitor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use BowlingAlley\Application\Service\Janitor\Cleaning\WipeCafeteriaCoffeeTableService;
use BowlingAlley\Application\Service\Janitor\Cleaning\WipeCafeteriaCoffeeTableRequest;

class CafeteriaCoffeeTableCleaningController extends Controller
{
    public function wipeCafeteriaCoffeeTable(Request $request, WipeCafeteriaCoffeeTableService $service)
    {
        $this->validate($request, ['table_number' => 'required']);

        $wipeCoffeeTableRequest = new WipeCafeteriaCoffeeTableRequest($request->input('table_number'));

        $service->execute($wipeCoffeeTableRequest);

        return response($body = null, $code = 204);
    }
}
