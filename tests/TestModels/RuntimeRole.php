<?php

namespace D4rk\Permission\Tests\TestModels;

class RuntimeRole extends \D4rk\Permission\Models\Role
{
    protected $visible = [
        'id',
        'name',
    ];
}
