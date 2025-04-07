<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Invoice</title>
    @vite('resources/css/admin.css')

    <!-- Google Font -->
    <link rel="icon" href="/images/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Karla:wght@200;300;400;500;600;700;800&family=Vollkorn:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <!-- start: Main -->
    <main id="main-content" class="elementor-top-section min-h-screen transition-all header-collapsed bg-[#EFF2F4] m-0">
        <div class="max-w-4xl mx-auto p-4">
            <div class="flex flex-col mb-4">
                <div class="flex flex-row items-center mt-4">
                    <h1 class="text-4xl font-bold text-[#34364A] font-karla">e-Invoice</h1>
                    <a href="#" class="text-[#335EF7] flex items-center mt-8">
                </div>
                <i class="fa-solid fa-arrow-left-long mr-3 fa-lg"></i> <span
                    class="text-[#335EF7] font-karla text-base">GO
                    BACK</span>
                </a>
            </div>
            <div class="bg-white shadow-md rounded-lg p-6 border-t-2 border-[#335EF7] mb-20">
                <div class="mb-6">
                    <div class="flex flex-row justify-between mb-6">
                        <div class="text-left">
                            <img class="h-12 w-auto mr-3" src="/images/icons.png" alt="hostfun">
                            <h2 class="font-karla text-3xl font-semibold text-[#34364A] flex items-center mt-3">
                                e-Invoice #{{ $transaction->no_invoice ?? 'N/A' }}
                            </h2>
                            <p class="font-karla text-[#34364A] mb-4 mt-1 text-sm">
                                Product:
                                <span class="font-bold">
                                    {{ optional($transaction_item->production)->name_product ?? 'Unknown Product' }}
                                </span>
                            </p>
                        </div>
                        <div class="text-right">
                            <p class="font-karla text-sm text-[#34364A]">
                                Issued:
                                {{ optional($transaction->transaction_date)->translatedFormat('d-M-Y') ?? 'N/A' }}
                            </p>
                            <p class="font-karla text-sm text-[#34364A]">
                                Status:
                                <span
                                    class="font-bold 
                        @if ($transaction->status === 'Pending') text-yellow-700
                        @elseif($transaction->status === 'Completed') text-green-700
                        @elseif($transaction->status === 'Cancelled') text-red-700 @endif">
                                    {{ strtoupper($transaction->status ?? 'UNKNOWN') }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-row justify-between pt-8 border-t-2">
                        <div class="text-left space-y-1 text-[#34364A]">
                            <p class="font-karla text-[#335EF7] text-sm">
                                Bill From:
                            </p>
                            <p class="font-karla font-bold text-sm">PT. Hostfun Indonesia</p>
                            <p class="font-karla text-sm">Jl. Pantai Indah Kapuk, Jakarta Utara, 14460</p>
                            <p class="font-karla text-sm">+62 822-9155-0281 (Whatsapp)</p>
                            <p class="font-karla text-sm">hostfun.com</p>
                        </div>
                        <div class="text-right space-y-1 text-[#34364A]">
                            <p class="font-karla text-[#335EF7] text-sm">
                                Bill To:
                            </p>
                            <p class="font-karla font-bold text-sm">
                                {{ ucwords($transaction->user->name) }}
                            </p>
                            <p class="font-karla text-sm">
                                {{ $transaction->user->email }}
                            </p>
                        </div>
                    </div>
                </div>
                <table id="example" class="row-border">
                    <thead>
                        <tr class="font-karla text-[#34364A]">
                            <th>No.</th>
                            <th>Name Product</th>
                            <th>Price</th>
                            <th>Qty</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="font-karla text-[#34364A]">
                            <td class="font-bold">1</td>
                            <td>{{ optional($transaction_item->production)->name_product ?? 'Unknown Product' }}
                            </td>
                            <td>Rp. {{ number_format($transaction_item->price ?? 0, 2, ',', '.') }}</td>
                            <td>{{ number_format($transaction_item->qty ?? 0) }} month</td>
                            <td>Rp. {{ number_format($transaction->total_amount ?? 0, 2, ',', '.') }}</td>
                        </tr>

                        <tr class="font-karla text-[#34364A]">
                            <td class="font-bold">2</td>
                            <td>Biaya Layanan
                            </td>
                            <td>Rp. 0</td>
                            <td>0</td>
                            <td>Rp. 0</td>
                        </tr>

                        <tr class="font-karla text-[#34364A]">
                            <td class="font-bold">3</td>
                            <td>Total Diskon
                            </td>
                            <td>Rp. 0</td>
                            <td>0</td>
                            <td>Rp. 0</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="font-karla">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class="colth text text">Total</th>
                            <th class="sub-colth textc">Rp.
                                {{ number_format($transaction->total_amount ?? 0, 2, ',', '.') }}
                            </th>
                        </tr>
                    </tfoot>
                </table>

                <div class="flex justify-end">
                    <div class="flex">
                        <a href="{{ route('exportPDF', ['id' => $transaction->id ?? 0]) }}"
                            class="font-karla px-4 py-2 rounded text-[#FEFEFF] bg-[#335EF7] flex items-center space-x-2 mr-2 hover:bg-[#34364A]">
                            Export PDF
                        </a>
                        <button onclick="showQR({{ $transaction->id }})"
                            class="flex items-center bg-[#335EF7] text-white px-6 py-2 rounded hover:bg-[#34364A]">
                            Cetak QR
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <!-- end: Main -->
    <script src="https://kit.fontawesome.com/8bcf7cf26c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>


    <script>
        function showQR(id) {
            fetch(`/admin/transaction/${id}/qr`)
                .then(res => res.json())
                .then(data => {
                    Swal.fire({
                        title: 'QR Code Transaksi',
                        html: '<div id="popup-qrcode" style="display:flex; justify-content:center;"></div>',
                        didOpen: () => {
                            new QRCode(document.getElementById("popup-qrcode"), {
                                text: data.link,
                                width: 160,
                                height: 160
                            });
                        },
                        confirmButtonText: 'Tutup'
                    });
                })
                .catch(error => {
                    console.error(error);
                    Swal.fire('Gagal', 'Tidak bisa mengambil data QR', 'error');
                });
        }
    </script>

    <!-- start: script table admin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.tailwindcss.js"></script>
    <script>
        let table = new DataTable('#example', {
            searching: false,
            paging: false,
            info: false,
            ordering: false,
            columnDefs: [{
                    width: "50px",
                    targets: 0,
                }, // No.
                {
                    width: "200px",
                    targets: 1
                }, // Name Product
                {
                    width: "210px",
                    targets: 2
                }, // Price
                {
                    width: "80px",
                    targets: 3
                }, // Qty
                {
                    width: "80px",
                    targets: 4
                } // Qty
            ],
            fixedColumns: true, // Ensure columns remain fixed
            autoWidth: false
        });
    </script>
    <!-- end: script table admin -->

    @include('sweetalert::alert')

</body>

</html>
