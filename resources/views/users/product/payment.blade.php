<x-users-transactions.layout>

    <div class="max-w-6xl mx-auto px-14 pt-12 pb-8 bg-[#F5F5F5] min-w-full min-h-full">
        <div class="flex items-center justify-center pb-10 space-x-4">
            <div
                class="w-12 h-12 font-karla bg-teal-500 text-white rounded-full flex items-center justify-center font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41z" />
                </svg>
            </div>
            <div class="h-1 w-8 bg-gray-300"></div>
            <div
                class="w-12 h-12 font-karla bg-teal-500 text-white border-4 border-teal-200 rounded-full flex items-center justify-center font-bold">
                2</div>
            <div class="h-1 w-8 bg-gray-300"></div>
            <div
                class="w-12 h-12 font-karla bg-gray-300 text-gray-500 rounded-full flex items-center justify-center font-bold">
                3</div>
        </div>

        <div class="flex flex-col items-center justify-center pb-6 mb-6">
            <h1 class="text-3xl font-bold text-[#12294A] mb-2">Payment Details
            </h1>
            <p class="font-karla text-gray-400">Kindly follow the instruction below</p>
        </div>

        <div class="flex justify-center">
            <div class="w-1/4 items-center">
                <div class="text-gray-500">
                    <p class="font-karla flex justify-between">
                        <span>
                            Subtotal:
                        </span>
                        <span>
                            Rp. {{ number_format($transaction->total_amount, 2, '.', ',') }}
                        </span>
                    </p>
                    <p class="font-karla flex justify-between">
                        <span>
                            Tax:
                        </span>
                        <span>
                            Free
                        </span>
                    </p>
                    <hr class="my-4" />
                    <p class="font-karla flex justify-between font-bold text-[#12294A] mb-2">
                        <span>
                            Total:
                        </span>
                        <span>
                            Rp. {{ number_format($transaction->total_amount, 2, '.', ',') }}
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-20 flex flex-col items-center justify-center gap-2">
            <button id="pay-button" class="w-1/4 py-2 bg-[#0165FF] text-white rounded hover:bg-[#12294A] duration-200">
                Pay now
            </button>
            <button
                class="w-1/4 py-2 bg-gray-200 text-gray-500 rounded hover:bg-[#12294A] hover:text-white duration-200">
                Cancel
            </button>
        </div>
    </div>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own js here, this is just example */
                    window.location.href = '/payment-success/{{ $transaction->id }}'
                },
                onPending: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                onError: function(result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                },
                onClose: function() {
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
            })
        });
    </script>

</x-users-transactions.layout>
