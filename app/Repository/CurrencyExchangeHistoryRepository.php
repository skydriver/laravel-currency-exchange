<?php

namespace App\Repository;

use App\DTOs\ResponseDTO;
use App\Models\CurrencyExchangeHistory;

/**
 * CurrencyExchangeHistoryRepository
 */
class CurrencyExchangeHistoryRepository implements CurrencyExchangeHistoryRepositoryInterface
{
    /**
     * @param ResponseDTO $dto
     * @return bool|mixed
     */
    public function store(ResponseDTO $dto): mixed
    {
        $currencyExchangeHistory = new CurrencyExchangeHistory;

        $currencyExchangeHistory->provider = $dto->getProvider();
        $currencyExchangeHistory->source_currency = $dto->getSourceCurrency();
        $currencyExchangeHistory->target_currency = $dto->getTargetCurrency();
        $currencyExchangeHistory->exchange_rate = $dto->getExchangeRate();
        $currencyExchangeHistory->amount = $dto->getAmount();
        $currencyExchangeHistory->exchange_date = $dto->getExchangeDate();
        $currencyExchangeHistory->total = $dto->getTotal();

        return $currencyExchangeHistory->save();
    }
}
