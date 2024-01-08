<!-- resources/views/pdf/inventory_report.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            display: flex;
            justify-content: center; /* Center the content horizontally */
            align-items: center; /* Center the content vertically */
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        .content {
            display: flex;
            flex-direction: column; /* Stack items vertically */
            align-items: center; /* Center items horizontally */
            width: 80%; /* Adjust the width as needed */
            padding: 20px;
            box-sizing: border-box;
        }

        .med-info {
            text-align: center; /* Center the text */
            margin-bottom: 20px; /* Add margin for separation */
            margin-left: -20px; /* Adjust margin to move the title to the left */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
            text-align: left; /* Align table cell content to the left */
            padding: 10px; /* Add padding for better readability */
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 style="text-align: center;">{{ $title }}</h1>

        @foreach ($medInfo as $med)
            <div class="med-info">
                <h2>Product Name: {{ $med->item_name }}</h2>
                <h3>Description: {{ $med->prod_desc }}</h3>
            </div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Batch Number</th>
                        <th>Expiry Date</th>
                        <th>Manufactured Date</th>
                        <th>Date Stocked</th>
                        <!-- Add more batch fields as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($med->MedBatch as $batch)
                        <tr>
                            <td>{{ $batch->batch_no }}</td>
                            <td>{{ $batch->expiration_date }}</td>
                            <td>{{ $batch->manufacturing_date }}</td>
                            <td>{{ $batch->date_stocked }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
        @foreach ($vaxInfo as $vax)
            <div class="med-info">
                <h2>Product Name: {{ $vax->item_name }}</h2>
                <h3>Description: {{ $vax->prod_desc }}</h3>
            </div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Batch Number</th>
                        <th>Expiry Date</th>
                        <th>Manufactured Date</th>
                        <th>Date Stocked</th>
                        <!-- Add more batch fields as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vax->VaxBatch as $batch)
                        <tr>
                            <td>{{ $batch->batch_no }}</td>
                            <td>{{ $batch->expiration_date }}</td>
                            <td>{{ $batch->manufacturing_date }}</td>
                            <td>{{ $batch->date_stocked }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach
        @foreach ($vitInfo as $vit)
            <div class="med-info">
                <h2>Product Name: {{ $vit->item_name }}</h2>
                <h3>Description: {{ $vit->prod_desc }}</h3>
            </div>
            <table border="1">
                <thead>
                    <tr>
                        <th>Batch Number</th>
                        <th>Expiry Date</th>
                        <th>Manufactured Date</th>
                        <th>Date Stocked</th>
                        <!-- Add more batch fields as needed -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vit->VitBatch as $batch)
                        <tr>
                            <td>{{ $batch->batch_no }}</td>
                            <td>{{ $batch->expiration_date }}</td>
                            <td>{{ $batch->manufacturing_date }}</td>
                            <td>{{ $batch->date_stocked }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach

        <!-- Repeat the above structure for VaxInfo and VitInfo -->
    </div>
</body>
</html>
