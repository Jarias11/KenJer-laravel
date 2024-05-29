<style>
    #AddInvoice {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    #AddInvoice .form-group {
        margin-bottom: 15px;
    }

    #AddInvoice label {
        font-weight: bold;
        font-size: 1em;
        color: #333;
        /* Darker color for better visibility */
    }

    #AddInvoice .form-control {
        border-radius: 5px;
        border: 1px solid #ced4da;
        padding: 10px;
        font-size: 1em;
        color: #495057;
        /* Darker text color for better readability */
        background-color: #fff;
    }

    #AddInvoice .item-row {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 10px;
    }

    #AddInvoice .item-row textarea {
        flex: 2;
    }

    #AddInvoice .item-row input {
        flex: 1;
    }

    #add-item-button,
    .btn-primary {
        margin-top: 10px;
    }

    .btn {
        border-radius: 5px;
        padding: 10px 15px;
        font-size: 1em;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>




<div class="container" id="AddInvoice">
    <form action="{{ route('invoices.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="client_name">Client Name:</label>
            <input type="text" id="client_name" name="client_name" required class="form-control">
        </div>
        <div class="form-group">
            <label for="client_address">Client Address:</label>
            <input type="text" id="client_address" name="client_address" required class="form-control">
        </div>
        <div class="form-group">
            <label for="invoice_date">Invoice Date:</label>
            <input type="date" id="invoice_date" name="invoice_date" required class="form-control">
        </div>
        <div class="form-group">
            <label for="tax_rate">Tax Rate (%):</label>
            <input type="number" id="tax_rate" name="tax_rate" step="0.01" class="form-control">
        </div>
        <div id="items-container">
            <div class="form-group item-row">
                <label for="description">Description:</label>
                <textarea id="description" name="description[]" required class="form-control"></textarea>
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount[]" step="0.01" required class="form-control">
            </div>
        </div>
        <button type="button" class="btn btn-secondary" id="add-item-button">Add Item</button>
        <button type="submit" class="btn btn-primary">Create Invoice</button>
    </form>
</div>


<script>
    document.getElementById('add-item-button').addEventListener('click', function() {
        var container = document.getElementById('items-container');
        var itemRow = document.createElement('div');
        itemRow.className = 'form-group item-row';

        var descriptionLabel = document.createElement('label');
        descriptionLabel.setAttribute('for', 'description');
        descriptionLabel.innerText = 'Description:';

        var descriptionTextarea = document.createElement('textarea');
        descriptionTextarea.setAttribute('id', 'description');
        descriptionTextarea.setAttribute('name', 'description[]');
        descriptionTextarea.setAttribute('required', 'required');
        descriptionTextarea.className = 'form-control';

        var amountLabel = document.createElement('label');
        amountLabel.setAttribute('for', 'amount');
        amountLabel.innerText = 'Amount:';

        var amountInput = document.createElement('input');
        amountInput.setAttribute('type', 'number');
        amountInput.setAttribute('id', 'amount');
        amountInput.setAttribute('name', 'amount[]');
        amountInput.setAttribute('step', '0.01');
        amountInput.setAttribute('required', 'required');
        amountInput.className = 'form-control';

        itemRow.appendChild(descriptionLabel);
        itemRow.appendChild(descriptionTextarea);
        itemRow.appendChild(amountLabel);
        itemRow.appendChild(amountInput);

        container.appendChild(itemRow);
    });
</script>
