<?php

namespace Tests\Models;

use Illuminate\Database\Eloquent\Model as Base;
use Paxha\EloquentEagerLimit\HasEagerLimit;

abstract class Model extends Base
{
    use HasEagerLimit;
}
