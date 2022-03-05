<?php

namespace App\Services\CurrencyConversion;

use App\DTOs\ResponseDTO;

/**
 * class AbstractHttpClient
 */
abstract class AbstractHttpClient
{
    /**
     * @param string $URL
     * @return array
     */
    public function doRead(string $URL): array
    {
        try {
            return json_decode(file_get_contents($URL), true);
        } catch (\Exception $ex) {
            // TODO: Handle exception
        }
    }

    /**
     * @param array $response
     * @return ResponseDTO
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function buildResponse(array $response): ResponseDTO
    {
        $data = array_merge($this->getDefaults(), $response);

        return new ResponseDTO(
            [
                'provider' => $data['provider'],
                'sourceCurrency' => $data['sourceCurrency'],
                'targetCurrency' => $data['targetCurrency'],
                'exchangeRate' => $data['exchangeRate'],
                'amount' => $data['amount'],
                'exchangeDate' => $data['exchangeDate'],
                'total' => $data['total'],
                'errors' => $data['errors'],
            ]
        );
    }

    /**
     * @return array
     */
    private function getDefaults(): array
    {
        return [
            'provider' => '',
            'sourceCurrency' => '',
            'targetCurrency' => '',
            'exchangeRate' => 0.0,
            'amount' => 1,
            'exchangeDate' => '',
            'total' => 0,
            'errors' => [
                'code' => 500,
                'message' => '',
                'errors' => [],
            ],
        ];
    }
}
