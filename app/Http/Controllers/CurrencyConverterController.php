<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConvertCurrencyRequest;
use App\Services\CurrencyService;
use App\Util\Currencies;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class CurrencyConverterController extends Controller
{
    public function index(Currencies $currencies): View
    {
        return view('currency-converter', ['currencies' => $currencies->all()]);
    }

    public function convert(ConvertCurrencyRequest $request, CurrencyService $currencyService): JsonResponse
    {
        $data = $request->validated();
        $amount = $currencyService->convert($data['from'], $data['to'], $data['amount']);

        return response()->json(['amount' => $amount]);
    }
}
