<?php

namespace JamesMowatt\Denarius\Exceptions;

use \Exception;

class NotIntegerException extends Exception
{
    protected $message = "You can only set an integer here";
}