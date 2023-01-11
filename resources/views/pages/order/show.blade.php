<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice #6</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

  <table>
    <thead>
        <tr>
            <th class="no-border text-start heading" colspan="6">
                Tiket Order
            </th>
        </tr>
        <tr class="bg-blue">
            <th>ID Tiket</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>Layanan</th>
            <th>Waktu</th>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
      @forelse ($orders as $order)
        <tr>
            <td width="10%">{{ $order->id }}</td>
            <td>
              {{ $order->name }}
            </td>
            <td width="10%">{{ $order->phone_no }}</td>
            <td width="10%">{{ $order->service->name }}</td>
            <td width="15%">{{ $order->waktu }}</td>
            <td width="15%">{{ $order->created_at->format('d-m-Y') }}</td>
        </tr>
        @empty
        <tr>
          <td colspan="3" class="text-center p-6">
            Data tidak tersedia
          </td>
        </tr>
    @endforelse
    </tbody>
</table>



</body>
</html>