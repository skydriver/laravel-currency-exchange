<?php

namespace App\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class ResponseDTO
 */
class ResponseDTO extends DataTransferObject
{
    /**
     * @var string
     */
    public string $provider;

    /**
     * @var string
     */
    public string $sourceCurrency;

    /**
     * @var string
     */
    public string $targetCurrency;

    /**
     * @var float
     */
    public float $exchangeRate;

    /**
     * @var int
     */
    public int $amount;

    /**
     * @var string
     */
    public string $exchangeDate;

    /**
     * @var float
     */
    public float $total;

    /**
     * @var ErrorDTO
     */
    public ErrorDTO $errors;

    /**
     * @param string $provider
     * @return void
     */
    public function setProvider(string $provider): void
    {
        $this->provider = $provider;
    }

    /**
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }

    /**
     * @param string $sourceCurrency
     * @return void
     */
    public function setSourceCurrency(string $sourceCurrency): void
    {
        $this->sourceCurrency = $sourceCurrency;
    }

    /**
     * @return string
     */
    public function getSourceCurrency(): string
    {
        return $this->sourceCurrency;
    }

    /**
     * @param string $targetCurrency
     * @return void
     */
    public function setTargetCurrency(string $targetCurrency): void
    {
        $this->targetCurrency = $targetCurrency;
    }

    /**
     * @return string
     */
    public function getTargetCurrency(): string
    {
        return $this->targetCurrency;
    }

    /**
     * @param float $exchangeRate
     * @return void
     */
    public function setExchangeRate(float $exchangeRate): void
    {
        $this->exchangeRate = $exchangeRate;
    }

    /**
     * @return float
     */
    public function getExchangeRate(): float
    {
        return $this->exchangeRate;
    }

    /**
     * @param int $amount
     * @return void
     */
    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @param string $exchangeDate
     * @return void
     */
    public function setExchangeDate(string $exchangeDate): void
    {
        $this->exchangeDate = $exchangeDate;
    }

    /**
     * @return string
     */
    public function getExchangeDate(): string
    {
        return $this->exchangeDate;
    }

    /**
     * @param float $total
     * @return void
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param ErrorDTO $errors
     * @return void
     */
    public function setErrors(ErrorDTO $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * @return ErrorDTO
     */
    public function getErrors(): ErrorDTO
    {
        return $this->errors;
    }
}
