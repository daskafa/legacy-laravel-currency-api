<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CurrencyRepositoryInterface
{
    /**
     * @return Collection
     */
    public function getCurrencies(): Collection;

    /**
     * @param  string  $currencyCode
     *
     * @return Collection
     */
    public function getCurrencyDetailByCurrencyCode(string $currencyCode): Collection;
}
