<?php

namespace App\Services\CurrencyConversion;

class FastForexIo implements CurrencyConversionHttpClientInterface
{
    public function convert(string $sourceCurrency, string $targetCurrency, int $value)
    {
        return 'FastForexIo Client';
    }
}
