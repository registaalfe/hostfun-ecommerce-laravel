<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Invoice</title>

    <style>
        body {
            font-family: 'Karla', sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin-right: 100px;
            padding-top: 20px;
            padding-left: 10px;
            background-color: #fff;
            border-top: 2px solid #335EF7;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            overflow: hidden;
            /* Menghindari float overlap */
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #34364A;
            margin-top: 10px;
            width: 100%;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header img {
            height: 50px;
        }

        .section {
            margin-top: 20px;
        }

        .bold {
            font-weight: bold;
        }

        .text-right {
            text-align: right;
            margin-top: 0;
            padding-top: 0;
        }

        .border-top {
            border-top: 2px solid #ddd;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .table th {
            background-color: #f2f2f2;
        }

        .text-blue {
            color: #335EF7;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            color: #fff;
            background-color: #335EF7;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 15px;
        }

        .btn:hover {
            background-color: #34364A;
        }

        p {
            margin: 4px;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="header">
            <div style="width: 100%; float: left;">
                <img src="{{ $image }}" alt="Logo">
                <h1>e-Invoice #{{ $transaction->no_invoice ?? 'N/A' }}</h1>
                <p>Product: <span
                        class="bold">{{ optional($transaction_item->production)->name_product ?? 'Unknown Product' }}</span>
                </p>
            </div>

            <div class="text-right" style="width: 50%; float: right;">
                <p>Issued: {{ optional($transaction->transaction_date)->translatedFormat('d-M-Y') ?? 'N/A' }}</p>
                <p>Status:
                    <span
                        style="
                    font-weight: bold;
                    color: {{ $transaction->status === 'Pending'
                        ? 'orange'
                        : ($transaction->status === 'Completed'
                            ? 'green'
                            : ($transaction->status === 'Cancelled'
                                ? 'red'
                                : 'black')) }};
                ">
                        {{ strtoupper($transaction->status ?? 'UNKNOWN') }}
                    </span>
                </p>
            </div>

            <div style="clear: both;"></div>
        </div>

        <!-- Billing Info -->
        <div class="section border-top">
            <div style="width: 50%; float: left; margin-top:20px;">
                <p class="text-blue">Bill From:</p>
                <p class="bold">PT. Hostfun Indonesia</p>
                <p>Jl. Pantai Indah Kapuk, Jakarta Utara, 14460</p>
                <p>+62 822-9155-0281 (Whatsapp)</p>
                <p>hostfun.com</p>
            </div>

            <div class="text-right" style="width: 50%; float: right; margin-top:20px;">
                <p class="text-blue">Bill To:</p>
                <p class="bold">{{ ucwords($transaction->user->name) }}</p>
                <p>{{ $transaction->user->email }}</p>
            </div>

            <div style="clear: both;"></div>
        </div>

        <!-- Invoice Table -->
        <table class="table" style="margin-top: 50px;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name Product</th>
                    <th>Price</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bold">1</td>
                    <td>{{ optional($transaction_item->production)->name_product ?? 'Unknown Product' }}</td>
                    <td>Rp. {{ number_format($transaction_item->price ?? 0, 2, ',', '.') }}</td>
                    <td>{{ number_format($transaction_item->qty ?? 0) }} month</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
