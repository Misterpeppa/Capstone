<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
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

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <title>PetRecord Report</title>
</head>
<body>

    <h1>PetRecord Report</h1>

    <table>
        <thead>
            <tr>
                <th>Owner</th>
                <th>Phone</th>
                <th>Pet</th>
                <th>Breed</th>
                <th>Allergies</th>
                <th>Existing Condition</th>
                <th>Current Medication</th>
            </tr>
        </thead>
        <tbody>
            @foreach($petrecord as $petRecord)
                <tr>
                    <td>{{ $petRecord->owner->first_name }} {{ $petRecord->owner->middle_name }} 
                        {{ $petRecord->owner->last_name }} {{ $petRecord->owner->suffix }}</td>
                    <td>{{ $petRecord->owner->phone }}</td>
                    <td>{{ $petRecord->pet->name }}</td>
                    <td>{{ $petRecord->pet->breed }}</td>
                    <td>{{ $petRecord->allergies }}</td>
                    <td>{{ $petRecord->existing_condition }}</td>
                    <td>{{ $petRecord->current_medication }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
