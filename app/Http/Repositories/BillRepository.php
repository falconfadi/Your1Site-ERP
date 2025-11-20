<?php

namespace App\Http\Repositories;

use App\Models\Bill;

class BillRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Bill::class);
    }
}
