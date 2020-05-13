<?php namespace Util;
use Throwable;

final class DateException extends \Exception {
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
