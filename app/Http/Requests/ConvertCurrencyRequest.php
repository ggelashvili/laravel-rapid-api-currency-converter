<?php

namespace App\Http\Requests;

use App\Rules\ValidCurrency;
use Illuminate\Foundation\Http\FormRequest;

class ConvertCurrencyRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'from'   => ['required', resolve(ValidCurrency::class)],
            'to'     => ['required', resolve(ValidCurrency::class)],
            'amount' => ['required', 'numeric', 'gt:0'],
        ];
    }
}
