<?php

namespace App\Repository;

use App\DTOs\ResponseDTO;

/**
 * CurrencyExchangeHistoryRepositoryInterface
 */
interface CurrencyExchangeHistoryRepositoryInterface
{
    /**
     * @param ResponseDTO $dto
     * @return mixed
     */
    public function store(ResponseDTO $dto);
}
