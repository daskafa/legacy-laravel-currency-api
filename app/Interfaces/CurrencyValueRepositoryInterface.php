<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface CurrencyValueRepositoryInterface
{
    /**
     * @param  string  $currencyId
     *
     * @return Collection
     */
    public function getCurrencyValuesByCurrencyId(string $currencyId): Collection;
}
