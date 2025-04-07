<x-admin.layout>
    <div class="flex flex-col ml-8 mt-6">
        <h1 class="font-karla text-2xl font-bold text-[#34364A]">Transactions</h1>
    </div>
    <div class="elementor-section flex flex-col mt-4 mx-8 p-6 min-h-screen bg-[#FEFEFF] rounded-xl">
        <div class="flex overflow-x-auto">
            <table id="" class="display min-w-full table-auto white space-nowrap">
                <thead class="bg-[#F7F9FB] border sticky -top-0.5 z-999999">
                    <tr>
                        <th class="px-6 py-3 w-0 text-center text-sm text-[#34364A] tracking-wider">No.</th>
                        <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            No. Invoice
                        </th>
                        <th
                            class="px-6 py-3 w-0 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            Produk
                        </th>
                        <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            Jumlah
                        </th>
                        <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            Price
                        </th>
                        <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            Date
                        </th>
                        <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-3 font-karla text-left text-sm font-semibold text-[#34364A] tracking-wider">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-[#FEFEFF] font-karla">
                    @foreach ($transactions as $index => $transaction)
                        @foreach ($transaction->transaction_items as $transaction_item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#34364A]">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#34364A]">
                                    #{{ $transaction->no_invoice }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#34364A]">
                                    {{ optional($transaction_item->production)->name_product ?? 'Unknown Product' }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#34364A]">
                                    {{ number_format($transaction_item->qty) }} Month
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#34364A]">
                                    Rp. {{ number_format($transaction_item->subtotal, 2, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-[#34364A]">
                                    {{ $transaction_item->created_at->format('d M Y, H:i') }}
                                </td>
                                <td
                                    class="px-6 py-4 whitespace-nowrap text-sm font-semibold px-4 py-2 rounded
                    @if ($transaction->status === 'Pending') text-yellow-700
                    @elseif($transaction->status === 'Completed') text-green-700
                    @elseif($transaction->status === 'Cancelled') text-red-700 @endif">
                                    {{ $transaction->status }}
                                </td>
                                <td
                                    class="flex flex-row px-6 py-4 justify-end whitespace-nowrap text-sm font-normal text-right">
                                    <a href="{{ route('admin.editProduct', $transaction_item->product_id) }}"
                                        class="font-karla px-1.5 py-1 rounded-sm text-white bg-[#335EF7] flex items-center space-x-2 mr-2 hover:bg-[#12294A]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path fill="currentColor"
                                                    d="M13 3a1 1 0 0 1 .117 1.993L13 5H5v14h14v-8a1 1 0 0 1 1.993-.117L21 11v8a2 2 0 0 1-1.85 1.995L19 21H5a2 2 0 0 1-1.995-1.85L3 19V5a2 2 0 0 1 1.85-1.995L5 3zm6.243.343a1 1 0 0 1 1.497 1.32l-.083.095l-9.9 9.899a1 1 0 0 1-1.497-1.32l.083-.094z" />
                                            </g>
                                        </svg>Edit
                                    </a>

                                    <form action="{{ route('admin.destroyProduct', $transaction_item->product_id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="deleting(this)"
                                            class="font-karla px-1.5 py-1 rounded-sm text-white bg-[#FC595B] flex items-center space-x-2 mr-2 hover:bg-[#F81F25]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M7 21q-.825 0-1.412-.587T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.587 1.413T17 21zM17 6H7v13h10zM9 17h2V8H9zm4 0h2V8h-2zM7 6v13z" />
                                            </svg>Delete
                                        </button>
                                    </form>

                                    <a href="{{ route('admin.showInvoice', $transaction->id) }}" target="_blank"
                                        class="font-karla px-1.5 py-1 rounded-sm text-white bg-[#40C171] flex items-center space-x-2 mr-2 hover:bg-[#43ac79]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24">
                                            <g fill="none">
                                                <path fill="currentColor"
                                                    d="M13 3a1 1 0 0 1 .117 1.993L13 5H5v14h14v-8a1 1 0 0 1 1.993-.117L21 11v8a2 2 0 0 1-1.85 1.995L19 21H5a2 2 0 0 1-1.995-1.85L3 19V5a2 2 0 0 1 1.85-1.995L5 3zm6.243.343a1 1 0 0 1 1.497 1.32l-.083.095l-9.9 9.899a1 1 0 0 1-1.497-1.32l.083-.094z" />
                                            </g>
                                        </svg>Invoice
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
</x-admin.layout>
