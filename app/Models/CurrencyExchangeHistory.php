<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $provider
 * @property string $source_currency
 * @property string $target_currency
 * @property float $exchange_rate
 * @property int $amount
 * @property float $total
 * @property string $exchange_date
 */
class CurrencyExchangeHistory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider',
        'source_currency',
        'target_currency',
        'exchange_rate',
        'amount',
        'total',
        'exchange_date',
    ];
}
