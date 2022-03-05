<?php

namespace App\Services\CurrencyConversion;

use App\DTOs\ResponseDTO;

/**
 * FixerIo Class
 *
 * @see https://fixer.io/documentation
 */
class FixerIo extends AbstractHttpClient implements CurrencyConversionHttpClientInterface
{
    /**
     * @param string $sourceCurrency
     * @param string $targetCurrency
     * @param int $value
     * @return ResponseDTO
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function convert(string $sourceCurrency, string $targetCurrency, int $value): ResponseDTO
    {
        $exchangeUrl = sprintf(
            "%s/latest?access_key=%s&cbase=%s&symbols=%s&format=1",
            env('FIXERIO_BASE_URL'),
            env('FIXERIO_API_KEY'),
            $sourceCurrency,
            $targetCurrency
        );

        $response = $this->doRead($exchangeUrl);

        $data = [
            'provider' => __CLASS__,
            'sourceCurrency' => $sourceCurrency,
            'targetCurrency' => $targetCurrency,
            'exchangeRate' => $response['rates'][$targetCurrency],
            'amount' => $value,
            'exchangeDate' => date('Y-m-d', $response['timestamp']),
            'total' => $value * $response['rates'][$targetCurrency],
            'errors' => $this->buildErrorProperties($response)
        ];

        return $this->buildResponse($data);
    }

    /**
     * @param array $response
     * @return array
     */
    private function buildErrorProperties(array $response): array
    {
        return [
            'code' => $response['code'] ?? 200,
            'message' => $response['message'] ?? '',
            'errors' => [],
        ];
    }
}
