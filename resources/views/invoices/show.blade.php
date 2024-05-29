<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #000;
        }

        .header h1 {
            margin: 0;
        }

        .header p {
            margin: 0;
            font-size: 1.2em;
            font-style: italic;
        }

        .invoice-title {
            font-size: 2.5em;
            font-weight: bold;
            text-align: right;
        }

        .company-info {
            margin-bottom: 20px;
            float: left;
            padding-right: 220px;
            padding-bottom: 80px;
            line-height: 0.4;
        }

        .invoice-details,
        .client-details {
            margin: 20px 0;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            clear: both;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .details-table th {
            background-color: #f2f2f2;
        }

        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #000;
            margin-top: 20px;
        }

        .footer p {
            margin: 5px 0;
        }

        .right-align {
            text-align: right;
        }

        .invoice-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            clear: both;
        }

        .invoice-header div {
            flex: 1;
            font-size: 0.9em;
            /* Smaller font size for invoice header */
        }

        .invoice-header .right {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .invoice-header .right .label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .invoice-header .right .value {
            margin-bottom: 5px;
        }

        .bold {
            font-weight: bold;
        }

        .italic {
            font-style: italic;
        }

        .grey-background {
            background-color: #f2f2f2;
        }

        .bottom-border {
            border-bottom: 1px solid #000;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .subtotal-row th,
        .tax-row th,
        .total-row th {
            border: none;
        }

        .subtotal-row th,
        .subtotal-row td,
        .tax-row th,
        .tax-row td,
        .total-row th,
        .total-row td {
            background-color: white;

        }

        .subtotal-row th,
        .tax-row th,
        .total-row th {
            text-align: left;
        }

        .subtotal-row td,
        .tax-row td,
        .total-row td {
            text-align: right;
        }

        .subtotal-row .grey-bg,
        .tax-row .grey-bg,
        .total-row .grey-bg {
            background-color: #f2f2f2;
        }

        .summary-table {
            margin-top: 20px;
            width: 50%;
            float: right;
        }

        .summary-table th,
        .summary-table td {
            padding: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="invoice-title">
            INVOICE
        </div>
        <div class="header">
            <div>
                <h1>KENJER CONTRACTORS</h1>
                <p>Good Work Good Prices!</p>
            </div>
        </div>

        <div class="invoice-header">
            <div class="company-info">
                <p>kenjercontractor@gmail.com</p>
                <p>East Windsor NJ 08520</p>
                <p>609-977-8713</p>
                <p>609-422-1009</p>
            </div>
            <div class="right">
                <div>
                    <div class="label">DATE:</div>
                    <div class="value">{{ \Carbon\Carbon::parse($invoice->invoice_date)->format('m/d/Y') }}</div>
                </div>
                <div>
                    <div class="label">INVOICE #:</div>
                    <div class="value">{{ $invoice->invoice_number }}</div>
                </div>
                <div>
                    <div class="label">FOR:</div>
                    <div class="value"></div>
                </div>
                <div>
                    <div class="label">BILL TO:</div>
                    <div class="value">{{ $invoice->client_name }}</div>
                    <div class="value">{{ $invoice->client_address }}</div>
                </div>
            </div>
        </div>

        <table class="details-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>T</th>
                    <th class="right-align">Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->items as $item)
                <tr>
                    <td>{{ $item['description'] }}</td>
                    <td></td>
                    <td class="right-align">${{ number_format($item['amount'], 2) }}</td>
                </tr>
                @endforeach
                <tr class="subtotal-row">
                    <th></th>
                    <td class="grey-bg">Subtotal</td>
                    <td class="right-align grey-bg">${{ number_format($invoice->total, 2) }}</td>
                </tr>
                <tr class="tax-row">
                    <th></th>
                    <td>Tax Rate</td>
                    <td class="right-align ">{{ $invoice->tax_rate }}%</td>
                </tr>
                <tr class="total-row">
                    <th></th>
                    <td class="grey-bg">Total</td>
                    <td class="right-align grey-bg">${{ number_format($invoice->total * (1 + $invoice->tax_rate / 100), 2) }}</td>
                </tr>
            </tbody>
        </table>

        <div class="footer">
            <p>East Windsor NJ 08520</p>
            <p>kenjercontractor@gmail.com</p>
            <p>609-977-8713 | 609-422-1009</p>
            <p class="italic">Make all checks payable to <b>FANNY ARIAS</b>. If you have any questions concerning this invoice, please feel free to contact us at any time. Thank you for your business!</p>
        </div>
    </div>
</body>

</html>
