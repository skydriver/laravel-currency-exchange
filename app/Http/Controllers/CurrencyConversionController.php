<?php

namespace App\Http\Controllers;

use App\Http\Requests\CurrencyExchangeRequest;
use App\Repository\CurrencyExchangeHistoryRepository;
use App\Services\CurrencyConversion\CurrencyConversionHttpClientInterface;
use App\Services\CurrencyConversion\FixerIo;
# use App\Services\CurrencyConversion\FastForexIo; // This is the second client *needs to be included only if its needed)

/**
 * CurrencyConversionController
 */
class CurrencyConversionController extends Controller
{
    /**
     * @var CurrencyConversionHttpClientInterface
     */
    private CurrencyConversionHttpClientInterface $client;

    /**
     * @param FixerIo $client
     * @param CurrencyExchangeHistoryRepository $repository
     */
    public function __construct(FixerIo $client, CurrencyExchangeHistoryRepository $repository)
    {
        $this->client = $client;

        parent::__construct($repository);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function convert(CurrencyExchangeRequest $request)
    {
        $results = $this->client->convert(
            $request->get('sourceCurrency'),
            $request->get('targetCurrency'),
            $request->get('amount', 1)
        );

        return $this->success($results);
    }
}
