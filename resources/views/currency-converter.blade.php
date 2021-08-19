<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Currency Converter</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div
            class="min-h-screen bg-gradient-to-b from-blue-400 to-light-blue-800 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <form class="space-y-6">
                    <div>
                        <input name="amount" autofocus type="number" min="0" placeholder="Enter Amount" autocomplete="off" required
                               class="appearance-none block w-full text-2xl p-3 bg-gray-50 placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div>
                        @include(
                            'currencies',
                            [
                                'name'    => 'from',
                                'default' => 'USD',
                                'class'   => [
                                    'p-3',
                                    'border-2',
                                    'border-blue-50',
                                    'w-full',
                                    'text-2xl',
                                ]
                            ]
                        )
                    </div>

                    <div>
                        @include(
                            'currencies',
                            [
                                'name'    => 'to',
                                'default' => 'EUR',
                                'class'   => [
                                    'p-3',
                                    'border-2',
                                    'border-blue-50',
                                    'w-full',
                                    'text-2xl',
                                ]
                            ]
                        )
                    </div>

                    <div>
                        <button type="button"
                                id="convertCurrency"
                                class="w-full flex justify-center items-center py-2 px-4 border border-transparent rounded-md shadow-sm text-2xl font-medium text-white bg-blue-500 hover:bg-blue-700 uppercase focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Convert
                        </button>
                    </div>

                    <div id="result" class="hidden font-bold text-3xl text-center"></div>
                </form>
            </div>
        </div>
    </body>
</html>
