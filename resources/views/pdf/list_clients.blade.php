<!-- resources/views/pdf/clients.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Clients List</h2>

    <table class="table table-responsive mt-3 w-100">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Birthdate</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientInfo as $client)
                <tr>
                    <td>{{ $client->first_name }} {{ $client->middle_name }} {{ $client->last_name }} {{ $client->suffix }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->birthdate }}</td>
                    <td>{{ $client->gender }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
