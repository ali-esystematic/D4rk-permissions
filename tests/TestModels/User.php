<?php

namespace D4rk\Permission\Tests\TestModels;

use D4rk\Permission\Traits\HasRoles;

class User extends UserWithoutHasRoles
{
    use HasRoles;
}
