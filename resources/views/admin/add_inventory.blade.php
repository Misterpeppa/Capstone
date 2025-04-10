<!DOCTYPE html>
<html>
<head>
    <title>Admin | Add Item</title>
</head>
<body>

    <!--<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Item') }}
        </h2>
    </x-slot>-->

<form id="addItemForm" method="POST" action="{{ route('inv.store') }}">
    @csrf
    <div>
        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" id="item_name" required>
    </div>

    <div>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required>
    </div>
    <div>
        <label for="price">Price</label>
        <input type="number" name="price" id="price" required>
    </div>
    <div>
        <label for="manufacturing_date">Manufacturing Date</label>
        <input type="date" name="manufacturing_date" id="manufacturing_date" required>
    </div>
    <div>
        <label for="batch_no">Batch No</label>
        <input type="number" name="batch_no" id="batch_no" required>
    </div>
    <div>
        <label for="product_type">Product Type:</label>
        <select name="product_type" id="product_type" required onchange="showFields()">
            <option value="" disabled selected>Select Product Type</option>
            <option value="vaccine" id="vaccine">Vaccine</option>
            <option value="medicine" id="medicine">Medicine</option>
            <option value="vitamin" id="vitamin">Vitamin</option>
        </select>
    </div>

    <div id="vaccineFields" style="display: none;">
        <label for="effects">Effects:</label>
        <input type="text" name="effects" id="effects" required>
        <label for="exp_date">Expiration Date:</label>
        <input type="date" name="vax_exp" id="vax_exp" required>
    </div>

    <div id="medicineFields" style="display: none;">
        <label for="uses">Uses:</label>
        <input type="text" name="uses" id="uses" required>
        <label for="side_effects">Side Effects:</label>
        <input type="text" name="side_effects" id="side_effects" required>
        <label for="exp_date">Expiration Date:</label>
        <input type="date" name="med_exp" id="med_exp" required>
    </div>

    <div id="vitaminFields" style="display: none;">
        <label for="exp_date">Expiration Date:</label>
        <input type="date" name="vit_exp" id="vit_exp" required>
    </div>
    <button type="submit" id="submitBtn">Add Item</button>
</form>

<script>
    function showFields() {
        var selectedType = document.getElementById("product_type").value;
        var vaccineFields = document.getElementById("vaccineFields");
        var medicineFields = document.getElementById("medicineFields");
        var vitaminFields = document.getElementById("vitaminFields");

        // Hide all fields by default
        vaccineFields.style.display = "none";
        medicineFields.style.display = "none";
        vitaminFields.style.display = "none";

        // Disable all fields by default
        document.getElementById("effects").disabled = true;
        document.getElementById("vax_exp").disabled = true;
        document.getElementById("uses").disabled = true;
        document.getElementById("side_effects").disabled = true;
        document.getElementById("med_exp").disabled = true;
        document.getElementById("vit_exp").disabled = true;

        // Enable the submit button by default
        document.getElementById("submitBtn").disabled = false;

        if (selectedType === "vaccine") {
            vaccineFields.style.display = "block";
            document.getElementById("effects").disabled = false;
            document.getElementById("vax_exp").disabled = false;
        } else if (selectedType === "medicine") {
            medicineFields.style.display = "block";
            document.getElementById("uses").disabled = false;
            document.getElementById("side_effects").disabled = false;
            document.getElementById("med_exp").disabled = false;
        } else if (selectedType === "vitamin") {
            vitaminFields.style.display = "block";
            document.getElementById("vit_exp").disabled = false;
        }
    }
</script>

</body>
</html>
