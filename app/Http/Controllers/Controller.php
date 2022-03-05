<?php

namespace App\Http\Controllers;

use App\DTOs\ErrorDTO;
use App\DTOs\ResponseDTO;
use App\Repository\CurrencyExchangeHistoryRepositoryInterface;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class Controller
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var CurrencyExchangeHistoryRepositoryInterface
     */
    private CurrencyExchangeHistoryRepositoryInterface $repository;

    /**
     * @param CurrencyExchangeHistoryRepositoryInterface $repository
     */
    public function __construct(CurrencyExchangeHistoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param ResponseDTO $dto
     * @return JsonResponse
     */
    public function success(ResponseDTO $dto): JsonResponse
    {
        /** @var ErrorDTO */
        $errors = $dto->getErrors();
        if (!empty($errors->getErrors()))
        {
            return $this->error($errors->getMessage(), $errors->getErrors(), $errors->getCode());
        }

        // Insert the results (something like response middleware)
        $this->repository->store($dto);

        return new JsonResponse(
            [
                'success' => true,
                'data' => [
                    'provider' => $dto->getProvider(),
                    'sourceCurrency' => $dto->getsourceCurrency(),
                    'targetCurrency' => $dto->getTargetCurrency(),
                    'exchangeRate' => $dto->getExchangeRate(),
                    'amount' => $dto->getAmount(),
                    'exchangeDate' => $dto->getExchangeDate(),
                    'total' => $dto->getTotal(),
                ]
            ],
            200
        );
    }

    /**
     * @param string $message
     * @param array $errors
     * @param int $code
     * @return JsonResponse
     */
    public function error(string $message, array $errors = [], int $code = 500): JsonResponse
    {
        return new JsonResponse(
            [
                'success' => false,
                'message' => $message,
                'errors' => $errors,
            ],
            $code
        );
    }
}
