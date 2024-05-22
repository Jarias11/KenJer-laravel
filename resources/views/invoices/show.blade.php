<!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header,
        .footer {
            text-align: center;
            padding: 10px;
        }

        .invoice-details,
        .client-details {
            margin: 20px 0;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>KENJER CONTRACTORS</h1>
        <p>Good work good prices!</p>
    </div>
    <div class="invoice-details">
        
        <p>Invoice #: {{ $invoice->invoice_number }}</p>
    </div>
    <div class="client-details">
        <p>FOR:</p>
        <p>{{ $invoice->client_name }}</p>
        <p>{{ $invoice->client_address }}</p>
    </div>
    <div class="details">
        <table class="details-table">
            <thead>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $invoice->description }}</td>
                    <td>${{ number_format($invoice->amount, 2) }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th>Subtotal</th>
                    <td>${{ number_format($invoice->amount, 2) }}</td>
                </tr>
                <tr>
                    <th>Tax Rate</th>
                    <td>{{ $invoice->tax_rate }}%</td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td>${{ number_format($invoice->total, 2) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
    <div class="footer">
        <p>East Windsor NJ 08520</p>
        <p>kenjercontractor@gmail.com</p>
        <p>609-977-8713 | 609-422-1009</p>
    </div>
</body>

</html>
