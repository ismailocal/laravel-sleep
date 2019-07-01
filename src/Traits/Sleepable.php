<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 01.07.2019
 * Time: 02:49
 */

namespace Ismailocal\Sleep\Traits;

use Carbon\Carbon;

trait Sleepable
{
    /**
     * Start sleeping
     * @param $unit
     * @param $value
     * @return $this
     */
    public function sleep($unit, $value = 1)
    {
        $this->end_of_sleep = Carbon::now()->add($unit, $value);
        return $this;
    }

    /**
     * Stop sleeping
     * @return $this
     */
    public function stopSleeping()
    {
        $this->end_of_sleep = null;
        return $this;
    }

    /**
     * Check sleeping
     * @return bool
     */
    public function isSleeping()
    {
        return $this->end_of_sleep && Carbon::parse($this->end_of_sleep)->greaterThan(Carbon::now());
    }
}