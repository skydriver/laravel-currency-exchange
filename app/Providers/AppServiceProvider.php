<?php

namespace App\Providers;

use App\Repository\CurrencyExchangeHistoryRepository;
use App\Repository\CurrencyExchangeHistoryRepositoryInterface;
use App\Services\CurrencyConversion\CurrencyConversionHttpClientInterface;
use App\Services\CurrencyConversion\FixerIo;
use App\Services\CurrencyConversion\FastForexIo;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CurrencyExchangeHistoryRepositoryInterface::class, CurrencyExchangeHistoryRepository::class);

        $this->app->bind(CurrencyConversionHttpClientInterface::class, FixerIo::class);
        $this->app->bind(CurrencyConversionHttpClientInterface::class, FastForexIo::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
