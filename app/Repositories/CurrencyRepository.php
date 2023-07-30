<?php

namespace App\Repositories;

use App\Interfaces\CurrencyRepositoryInterface;
use App\Models\Currency;
use Illuminate\Database\Eloquent\Collection;

class CurrencyRepository implements CurrencyRepositoryInterface
{
    private Currency $model;

    /**
     * @param  Currency  $model
     */
    public function __construct(Currency $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function getCurrencies(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param  string  $currencyCode
     *
     * @return Collection
     */
    public function getCurrencyDetailByCurrencyCode(string $currencyCode): Collection
    {
        return $this->model->select(['id'])->where('currencyCode', $currencyCode)->first();
    }
}
