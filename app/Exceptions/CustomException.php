<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    public static function internalException(): static
    {
        return new static('Internal error', 500);
    }
}
