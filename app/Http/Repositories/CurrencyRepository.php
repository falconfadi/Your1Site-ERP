<?php

namespace App\Http\Repositories;

use App\Models\Currency;
use Exception;

class CurrencyRepository extends BaseRepository
{
    public function __construct()
    {
        parent::__construct(Currency::class);
    }

    public function getShowPayload($id)
    {
        return [
            'currency' => $this->find($id),
            'currencies' => $this->getter(
                model: 'Currency',
                callable: [
                    'where' => [['id', '!=', $id]],
                ]
            ),
        ];
    }

    public function delete($id): bool
    {
        $currency = $this->find($id);
        if ($currency->is_default) {
            throw new Exception('Default currency can\'t be deleted');

            return false;
        }

        return $currency->delete();
    }
}
