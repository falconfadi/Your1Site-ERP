<?php

namespace App\Http\Repositories;

use App\Models\Unit;

class UnitRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Unit::class);
    }
}
