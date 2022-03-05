<?php

namespace App\DTOs\FixerIoDTOs;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class CurrencyExchangeErrorDTO
 */
class CurrencyExchangeErrorDTO extends DataTransferObject
{
    /**
     * @var bool
     */
    public bool $success;

    /**
     * @var int
     */
    public int $code;

    /**
     * @var string
     */
    public string $type;

    /**
     * @var string
     */
    public string $info;

    /**
     * @return bool
     */
    public function getSuccess(): bool
    {
        return $this->success;
    }

    /**
     * @param int $success
     * @return void
     */
    public function setSuccess(int $success): void
    {
        $this->success = $success;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return void
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return void
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * @param string $info
     * @return void
     */
    public function setInfo(string $info): void
    {
        $this->info = $info;
    }
}
