<?php

namespace App\Http\Repositories;

use App\Models\Expense;

class ExpenseRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Expense::class);
    }
}
