<!DOCTYPE html>
<html>

<head>
    <title>Estimate</title>
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

        .estimate-title {
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

        .estimate-details,
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

        .footer-text {
            margin: 5px 0;
            font-size: 0.7em;
            /* Smaller font size */
        }

        .prepared-section {

            width: 100%;
            /* Align items vertically in the center */
            margin-top: 20px;
            border: black solid 2px;
        }
        .prepared-by{
            padding-right:19%;
        }
        .prepared-by,
        .date {
            margin-top:70px;
            float:left;
            width: 40%;
            text-align: center;
            /* Center the text in each div */
        }

        .prepared-by hr,
        .date hr {
            border: none;
            border-top: 1px solid #000;
            margin-bottom: 5px;
        }

        .prepared-by p,
        .date p {
            margin: 0;
        }

        .right-align {
            text-align: right;
        }

        .estimate-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            clear: both;
        }

        .estimate-header div {
            flex: 1;
            font-size: 0.9em;
            /* Smaller font size for estimate header */
        }

        .estimate-header .right {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .estimate-header .right .label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .estimate-header .right .value {
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
        <div class="estimate-title">
            ESTIMATE
        </div>
        <div class="header">
            <div>
                <h1>KENJER CONTRACTORS</h1>
                <p>Good Work Good Prices!</p>
            </div>
        </div>

        <div class="estimate-header">
            <div class="company-info">
                <p>kenjercontractor@gmail.com</p>
                <p>East Windsor NJ 08520</p>
                <p>609-977-8713</p>
                <p>609-422-1009</p>
            </div>
            <div class="right">
                <div>
                    <div class="label">DATE:</div>
                    <div class="value">{{ \Carbon\Carbon::parse($estimate->estimate_date)->format('m/d/Y') }}</div>
                </div>
                <div>
                    <div class="label">ESTIMATE #:</div>
                    <div class="value">{{ $estimate->estimate_number }}</div>
                </div>
                <div>
                    <div class="label">FOR:</div>
                    <div class="value"></div>
                </div>
                <div>
                    <div class="label">BILL TO:</div>
                    <div class="value">{{ $estimate->client_name }}</div>
                    <div class="value">{{ $estimate->client_address }}</div>
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
                @foreach ($estimate->items as $item)
                <tr>
                    <td>{{ $item['description'] }}</td>
                    <td></td>
                    <td class="right-align">${{ number_format($item['amount'], 2) }}</td>
                </tr>
                @endforeach
                <tr class="subtotal-row">
                    <th></th>
                    <td class="grey-bg">Subtotal</td>
                    <td class="right-align grey-bg">${{ number_format($estimate->total, 2) }}</td>
                </tr>
                <tr class="tax-row">
                    <th></th>
                    <td>Tax Rate</td>
                    <td class="right-align ">{{ $estimate->tax_rate }}%</td>
                </tr>
                <tr class="total-row">
                    <th></th>
                    <td class="grey-bg">Total</td>
                    <td class="right-align grey-bg">${{ number_format($estimate->total * (1 + $estimate->tax_rate / 100), 2) }}</td>
                </tr>
            </tbody>
        </table>
        <div>
            <h2>Notes: </h2>
            <p1>{{$estimate->notes}}</p1>
        </div>

        <div class="footer">
            <p class="footer-text">This is an estimate only, not a contract. This estimate is for completing the job described above, based on our evaluation. It does not include unforeseen price increases or additional labor and materials which may be required should problems arise.</p>
            <p class="footer-text">All payments will be split as 1/3 on signing contract, 2/3 in work beginning and 3/3 finishing the work.</p>
            <div class="prepared-section">
                <div class="prepared-by">
                    <hr>
                    <p>Prepared By</p>
                </div>
                <div class="date">
                    <hr>
                    <p>Date</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
