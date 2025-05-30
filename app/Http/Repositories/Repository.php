<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface Repository
{
    public function all(): Collection;

    public function find(int $id): Model;

    public function add(array $data): Model;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;

    public function allWith(array|string $relation): Collection;

    public function findWith(
        int $id,
        array|string $relation = [],
        array|string $columns = ['*']
    ): Model;

    public function paginateWith(
        int $perPage = 5,
        array|string $relation = [],
        array|string $columns = ['*'],
    ): Collection;

    public function getter(
        string $model,
        array $callable = [],
        string $getter = 'get',
        array $columns = ['*']
    ) : Collection|Model|null;
}
