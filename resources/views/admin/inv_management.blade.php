<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Inventory Management</title>
</head>
<body>
<x-app-layout>

<form id="addItemForm" action="{{ route('admin.inv') }}" method="get">
    <button type="submit">Add Item</button>
</form>

<!-- Add the filter for sorting product type -->
<label for="productTypeFilter">Sort by Product Type:</label>
<select id="productTypeFilter">
    <option value="all">All</option>
    <option value="vaccine">Vaccine</option>
    <option value="medicine">Medicine</option>
    <option value="food">Food</option>
</select>

<table id="itemTable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Item Name</th>
            <th>
                <a href="#" class="sort-link" data-sort="quantity">Quantity</a>
            </th>
            <th>
                <a href="#" class="sort-link" data-sort="price">Price</a>
            </th>
            <th>Expiration Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vax_info as $key => $vax)
            <tr data-product-type="vaccine">
                <td>{{ $key + 1 }}</td>
                <td>{{ $vax->item_name }}</td>
                <td data-quantity="{{ $vax->quantity }}">{{ $vax->quantity }}</td>
                <td data-price="{{ $vax->price }}">{{ $vax->price }}</td>
                <td>{{ $vax->vax_exp }}</td>
            </tr>
        @endforeach

        @foreach ($med_info as $key => $med)
            <tr data-product-type="medicine">
                <td>{{ $key + 1 }}</td>
                <td>{{ $med->item_name }}</td>
                <td data-quantity="{{ $med->quantity }}">{{ $med->quantity }}</td>
                <td data-price="{{ $med->price }}">{{ $med->price }}</td>
                <td>{{ $med->med_exp }}</td>
            </tr>
        @endforeach

        @foreach ($food_info as $key => $food)
            <tr data-product-type="food">
                <td>{{ $key + 1 }}</td>
                <td>{{ $food->item_name }}</td>
                <td data-quantity="{{ $food->quantity }}">{{ $food->quantity }}</td>
                <td data-price="{{ $food->price }}">{{ $food->price }}</td>
                <td>{{ $food->food_exp }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Add event listener to the product type filter
        $('#productTypeFilter').on('change', function() {
            const selectedProductType = $(this).val();

            // Show all rows by default
            $('#itemTable tbody tr').show();

            // Filter and hide rows based on the selected product type
            if (selectedProductType !== 'all') {
                $('#itemTable tbody tr:not([data-product-type="' + selectedProductType + '"])').hide();
            }
        });

        // Sorting functionality
        $('.sort-link').on('click', function(e) {
            e.preventDefault();
            const sortKey = $(this).data('sort');
            sortTableByColumn(sortKey);
        });

        function sortTableByColumn(column) {
            const $tbody = $('#itemTable tbody');
            const rows = $tbody.find('tr').get();
            let sortOrder = $(`.sort-link[data-sort="${column}"]`).data('order') || 'asc';

            rows.sort(function(row1, row2) {
                const value1 = $(row1).find('td[data-' + column + ']').text().trim();
                const value2 = $(row2).find('td[data-' + column + ']').text().trim();

                // If the column contains numbers (like price and quantity), convert them to numbers for proper sorting
                if (!isNaN(value1) && !isNaN(value2)) {
                    return sortOrder === 'asc' ? parseFloat(value1) - parseFloat(value2) : parseFloat(value2) - parseFloat(value1);
                } else {
                    return sortOrder === 'asc' ? value1.localeCompare(value2) : value2.localeCompare(value1);
                }
            });

            $tbody.empty().append(rows);

            // Toggle the sorting order for the column
            sortOrder = sortOrder === 'asc' ? 'desc' : 'asc';
            $(`.sort-link[data-sort="${column}"]`).data('order', sortOrder);
        }
    });
</script>
</x-app-layout>
</body>
</html>
