<?php

namespace Waygou\SurveyorNova\Http\Middleware;

use Waygou\SurveyorNova\SurveyorNova;

class Authorize
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return \Illuminate\Http\Response
     */
    public function handle($request, $next)
    {
        return resolve(SurveyorNova::class)->authorize($request) ? $next($request) : abort(403);
    }
}
