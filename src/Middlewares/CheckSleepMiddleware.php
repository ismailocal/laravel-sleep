<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 01.07.2019
 * Time: 03:35
 */

namespace Ismailocal\Sleep\Middlewares;

use Ismailocal\Sleep\Exceptions\UserSleepingException;

class CheckSleepMiddleware
{
    /**
     * @param $request
     * @param \Closure $next
     * @return mixed
     * @throws AsleepException
     */
    public function handle($request, \Closure $next)
    {
        if (auth()->user() && auth()->user()->isSleeping()) {
            throw new UserSleepingException();
        }

        return $next($request);
    }
}