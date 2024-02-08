<?php

namespace App\Exceptions\Acesse;

use App\Exceptions\CustomException;

class AcesseException extends CustomException
{
    public static function notFound()
    {
        return new self('Acesse not found', 404);
    }

    public static function notCreated()
    {
        return new self('Acesse not created', 500);
    }

    public static function notUpdated()
    {
        return new self('Acesse not updated', 500);
    }

    public static function notDeleted()
    {
        return new self('Acesse not deleted', 500);
    }

    public static function notFoundData()
    {
        return new self('Data not found', 404);
    }

    public static function noPermission()
    {
        return new self('No permission', 403);
    }
}
