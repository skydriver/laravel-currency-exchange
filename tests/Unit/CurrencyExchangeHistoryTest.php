<?php

namespace Tests\Unit;

use App\DTOs\ResponseDTO;
use App\Repository\CurrencyExchangeHistoryRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class CurrencyExchangeHistoryTest
 */
class CurrencyExchangeHistoryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @return void
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function test_create()
    {
        $dto = new ResponseDTO(
            [
                'provider' => 'test_provider',
                'sourceCurrency' => 'test_sourceCurrency',
                'targetCurrency' => 'test_targetCurrency',
                'exchangeRate' => 5.25,
                'amount' => 10,
                'exchangeDate' => date('Y-m-d', time()),
                'total' => 300.10,
                'errors' => [
                    'code' => 500,
                    'message' => '',
                    'errors' => [],
                ],
            ]
        );

        $currencyExchange = new CurrencyExchangeHistoryRepository();

        $result = $currencyExchange->store($dto);

        $this->assertTrue($result);
    }
}
