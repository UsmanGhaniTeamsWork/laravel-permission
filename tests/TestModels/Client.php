<?php

namespace Spatie\Permission\Tests\TestModels;

use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Laravel\Passport\Client as BaseClient;
use Spatie\Permission\Traits\HasRoles;

class Client extends BaseClient implements AuthorizableContract
{
    use HasRoles;
    use Authorizable;

    /**
     * Required to make clear that the client requires the api guard
     *
     * @var string
     */
    protected $guard_name = 'api';
}
