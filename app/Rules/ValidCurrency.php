<?php

namespace App\Rules;

use App\Util\Currencies;
use Illuminate\Contracts\Validation\Rule;

class ValidCurrency implements Rule
{
    public function __construct(protected Currencies $currencies)
    {
        //
    }

    public function passes($attribute, $value): bool
    {
        return in_array($value, array_keys($this->currencies->all()));
    }

    public function message(): string
    {
        return 'The given currency is invalid.';
    }
}
