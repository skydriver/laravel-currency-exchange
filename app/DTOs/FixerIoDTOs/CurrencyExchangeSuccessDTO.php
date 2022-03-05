<?php

namespace App\DTOs\FixerIoDTOs;

use Spatie\DataTransferObject\DataTransferObject;

class CurrencyExchangeSuccessDTO  extends DataTransferObject
{
    public bool $success;
    public string $from;
    public string $to;
    public int $amount;
    public int $timestamp;
    public float $rate;
    public string $date;
    public float $result;
}
