<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Rejected Appointments</title>
</head>
<body>
    
<h2>Rejected Appointments</h2>

<!-- Display approved appointment data -->
<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Pet Type</th>
            <th>Breed</th>
            <th>Appointment Type</th>
            <th>Appointment Date</th>
            <th>Appointment Time</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rejected as $key => $appointment)
        <tr id="row_{{ $appointment->id }}">
                <td>{{ $key + 1 }}</td>
                <td>{{ $appointment->petType }}</td>
                <td>{{ $appointment->breed }}</td>
                <td>{{ $appointment->appointmentType }}</td>
                <td>{{ $appointment->appointmentDate }}</td>
                <td>{{ $appointment->appointmentTime }}</td>
        @endforeach
    </tbody>
</table>
</body>
</html>
