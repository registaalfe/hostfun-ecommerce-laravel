<x-users-transactions.layout>
    <div class="flex flex-col w-1/4 mx-auto bg-[#F5F5F5] shadow-md rounded-lg mt-10 p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-semibold">Pilih pembayaran</h1>
            <i class="fas fa-times text-gray-500"></i>
        </div>

        <!-- Kartu Kredit -->
        <div class="mb-4">
            <h2 class="text-lg font-semibold">Kartu Kredit</h2>
            <label class="flex items-center mt-2 cursor-pointer">
                <div
                    class="flex items-center p-2 border rounded-lg w-full peer-checked:bg-blue-100 transition justify-between">
                    <div class="flex">
                        <img alt="Credit Card Icon" class="w-10 h-10" height="40"
                            src="https://storage.googleapis.com/a1aa/image/2qx5vRKvRW6QGRHTHm4mgXdVErxH65nVXEfvX2PXPnU4nZfTA.jpg"
                            width="40" />
                        <div class="ml-2">
                            <p class="text-gray-700">Kartu Kredit / Cicilan</p>
                            <p class="text-gray-500 text-sm">Minimum Rp50.000</p>
                        </div>
                    </div>
                    <input type="radio" name="payment_method" value="credit_card" />
                </div>
            </label>
        </div>

        <!-- Transfer Virtual Account -->
        <div class="mb-4">
            <h2 class="text-lg font-semibold">Transfer Virtual Account</h2>
            @foreach ([['Mandiri', 'mandiri', 'https://storage.googleapis.com/a1aa/image/dbqao42e8pVoDSfMp00asw6geVNSsWi1nAOKRALmTZoYfM7PB.jpg'], ['BCA', 'bca', 'https://storage.googleapis.com/a1aa/image/q4m2Z54rOMI9DtxJVWAzoOQaiP0n2EroDVP8VnaSFYn7zsfJA.jpg'], ['BRIVA', 'briva', 'https://storage.googleapis.com/a1aa/image/6viXRRjldDoLORU7JRQewd2jDc5SWJeW6fMDnYm77bsnfM7PB.jpg'], ['BNI', 'bni', 'https://storage.googleapis.com/a1aa/image/HWz9nKzHPfwMCqeVRWlPaAwAEC74tggotLRf6fOzEmweezsfJA.jpg']] as $bank)
                <label class="flex items-center mt-2 cursor-pointer">
                    <input type="radio" name="payment_method" value="{{ $bank[1] }}" class="hidden peer" />
                    <div class="flex items-center p-2 border rounded-lg w-full peer-checked:bg-blue-100 transition">
                        <img alt="{{ $bank[0] }} Logo" class="w-10 h-10" height="40" src="{{ $bank[2] }}"
                            width="40" />
                        <p class="ml-2 text-gray-700">{{ $bank[0] }} Virtual Account</p>

                    </div>
                </label>
            @endforeach
            <div class="text-center mt-2">
                <button type="button" class="text-blue-500">Tampilkan 2+ pembayaran</button>
            </div>
        </div>

        <!-- Transfer Virtual Account Syariah -->
        <div>
            <h2 class="text-lg font-semibold">Transfer Virtual Account Syariah</h2>
            @foreach ([['Bank Syariah Indonesia', 'bsi', 'https://storage.googleapis.com/a1aa/image/WG26KfGM80w5NKfrAuuwfKlLxYAblZcsS74rGGmKu7eGfZ2fE.jpg'], ['Bank Muamalat', 'muamalat', 'https://storage.googleapis.com/a1aa/image/fQ628RJvvO0SCqwDCw5R4UJgzd8e1FnbEeD3pRmYZaLrfM7PB.jpg']] as $syariah)
                <label class="flex items-center mt-2 cursor-pointer">
                    <input type="radio" name="payment_method" value="{{ $syariah[1] }}" class="hidden peer" />
                    <div class="flex items-center p-2 border rounded-lg w-full peer-checked:bg-blue-100 transition">
                        <img alt="{{ $syariah[0] }} Logo" class="w-10 h-10" height="40" src="{{ $syariah[2] }}"
                            width="40" />
                        <p class="ml-2 text-gray-700">{{ $syariah[0] }}</p>

                    </div>
                </label>
            @endforeach
        </div>

        <!-- Tombol Kirim -->
        <div class="mt-4">
            <button type="submit" id="submit-button"
                class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600 disabled:opacity-50" disabled>Pilih
                Metode Pembayaran</button>
        </div>

    </div>
</x-users-transactions.layout>
