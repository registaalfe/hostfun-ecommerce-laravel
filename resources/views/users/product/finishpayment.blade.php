<x-users-transactions.layout>
    <div class="max-w-6xl mx-auto px-14 pt-12 pb-8 bg-[#F5F5F5] min-w-full min-h-full">

        <div class="flex items-center justify-center pb-10 space-x-4">
            <div
                class="w-12 h-12 font-karla bg-teal-500 text-white rounded-full flex items-center justify-center font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41z" />
                </svg></div>
            <div class="h-1 w-8 bg-gray-300"></div>
            <div
                class="w-12 h-12 font-karla bg-teal-500 text-white rounded-full flex items-center justify-center font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41z" />
                </svg></div>
            <div class="h-1 w-8 bg-gray-300"></div>
            <div
                class="w-12 h-12 font-karla bg-teal-500 text-white rounded-full flex items-center justify-center font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M9 16.17L5.53 12.7a.996.996 0 1 0-1.41 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71a.996.996 0 1 0-1.41-1.41z" />
                </svg></div>

        </div>

        <div class="flex flex-col items-center justify-center gap-12">
            <img alt="success_payment" height="268" width="420"
                src="{{ asset('images/icon-success-payment.png') }}" />

            <p class="font-karla w-80 text-center text-gray-400">We will inform you via email later
                once the transaction has been accepted</p>
        </div>

        <div class="text-center mt-20">
            <button class="font-karla px-20 py-2 bg-[#0165FF] text-white rounded hover:bg-[#12294A] duration-200">
                Back to Home Page
            </button>
        </div>
    </div>

</x-users-transactions.layout>
