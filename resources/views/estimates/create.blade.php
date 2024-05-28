<div class="container" id="AddEstimate">
    <form action="{{ route('estimate.store') }}" method="POST">
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
            <label for="estimate_date">Estimate Date:</label>
            <input type="date" id="estimate_date" name="estimate_date" required class="form-control">
        </div>
        <div class="form-group">
            <label for="tax_rate">Tax Rate (%):</label>
            <input type="number" id="tax_rate" name="tax_rate" step="0.01" class="form-control">
        </div>
        <div class="form-group">
            <label for="notes">Notes: </label>
            <textarea id="notes" name="notes" required class="form-control"></textarea>
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
