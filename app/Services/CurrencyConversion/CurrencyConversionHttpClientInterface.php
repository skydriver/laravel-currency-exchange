<?php

namespace App\Services\CurrencyConversion;

use App\DTOs\ResponseDTO;

/**
 * CurrencyConversionHttpClientInterface
 */
interface CurrencyConversionHttpClientInterface
{
    public function convert(string $sourceCurrency, string $targetCurrency, int $value): ResponseDTO;
}
