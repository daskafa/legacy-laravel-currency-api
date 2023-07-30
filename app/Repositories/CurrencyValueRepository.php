<?php

namespace App\Repositories;

use App\Interfaces\CurrencyValueRepositoryInterface;
use App\Models\CurrencyValue;
use Illuminate\Database\Eloquent\Collection;

class CurrencyValueRepository implements CurrencyValueRepositoryInterface
{
    private CurrencyValue $model;

    /**
     * @param  CurrencyValue  $model
     */
    public function __construct(CurrencyValue $model)
    {
        $this->model = $model;
    }

    /**
     * @param  string  $currencyId
     *
     * @return Collection
     */
    public function getCurrencyValuesByCurrencyId(string $currencyId): Collection
    {
        return $this->model->select(['logged_at', 'currency_value'])->where('currency_id', $currencyId)->get();
    }
}
