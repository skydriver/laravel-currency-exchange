<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CurrencyExchangeRequest
 */
class CurrencyExchangeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Maybe we can add bearer validation here if we are using one endpoint
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sourceCurrency' => 'required|min:3|max:3',
            'targetCurrency' => 'required|min:3|max:3',
            'amount' => 'numeric|min:1',
        ];
    }
}
