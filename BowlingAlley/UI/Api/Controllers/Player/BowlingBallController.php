<?php declare(strict_types=1);

namespace BowlingAlley\UI\Api\Controllers\Player;

use App\Http\Controllers\Controller;

class BowlingBallController extends Controller
{
    public function throwBowlingBall(Request $request, ThrowBowlingBallService $service)
    {
        $throwBowlingBallRequest = new ThrowBowlingBallRequest(
            $request->input('player_id'),
            $request->input('angle'),
            $request->input('spin'),
            $request->input('speed')
        );

        $service->execute($throwBowlingBallRequest);

        return $this->response->make($body = null, $code = 204);
    }
}
