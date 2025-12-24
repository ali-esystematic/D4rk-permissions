<?php

namespace D4rk\Permission\Exceptions;

use InvalidArgumentException;

class WildcardPermissionNotImplementsContract extends InvalidArgumentException
{
    public static function create()
    {
        return new static(__('Wildcard permission class must implement D4rk\\Permission\\Contracts\\Wildcard contract'));
    }
}
