<?php

namespace phpboot\dal\db;

use RuntimeException;
use Throwable;

class DbException extends RuntimeException
{
    public function __construct(?Throwable $cause = null, string $message = '')
    {
        parent::__construct($message, 0, $cause);
    }
}
