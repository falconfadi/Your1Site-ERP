<?php

namespace App\Http\Repositories;

use App\Models\AccountType;

class AccountTypeRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(AccountType::class);
    }
}
