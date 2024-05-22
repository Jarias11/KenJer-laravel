<!DOCTYPE html>
<html>

<head>
    <title>Create Invoice</title>
</head>

<body>
    <h1>Create Invoice</h1>

    @if ($message = Session::get('success'))
    <p>{{ $message }}</p>
    @endif

    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <label for="client_name">Client Name:</label>
        <input type="text" id="client_name" name="client_name" required>
        <br>

        <label for="client_address">Client Address:</label>
        <input type="text" id="client_address" name="client_address" required>
        <br>

        <label for="invoice_date">Invoice Date:</label>
        <input type="date" id="invoice_date" name="invoice_date" required>
        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>

        <label for="amount">Amount:</label>
        <input type="number" id="amount" name="amount" step="0.01" required>
        <br>

        <button type="submit">Create Invoice</button>
    </form>
</body>

</html>
