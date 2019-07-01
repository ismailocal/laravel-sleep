<?php
/**
 * Created by PhpStorm.
 * User: ismailocal
 * Date: 01.07.2019
 * Time: 03:53
 */

namespace Ismailocal\Sleep\Exceptions;

use Symfony\Component\HttpKernel\Exception\HttpException;

class UserSleepingException extends HttpException
{
    protected $statusCode = 403;
    protected $message = 'User asleep!';

    public function __construct()
    {
        parent::__construct($this->statusCode, $this->message);
    }
}