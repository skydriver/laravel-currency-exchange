<?php

namespace App\DTOs;

use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class ErrorDTO
 */
class ErrorDTO extends DataTransferObject
{
    /**
     * @var int
     */
    public int $code;

    /**
     * @var string
     */
    public string $message;

    /**
     * @var array
     */
    public array $errors;

    /**
     * @param int $code
     * @return void
     */
    public function setCode(int $code): void
    {
        $this->code = $code;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param string $message
     * @return void
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param array $errors
     * @return void
     */
    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
