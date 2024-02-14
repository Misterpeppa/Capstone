<!DOCTYPE html>
<html>
<head>
    <title>Appointment Details</title>
</head>
<body>
    <h2>Approved</h2>
        <table border="1" class="table table-responsive mt-3 w-100">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Pet Name</th>
                    <th>Pet Type</th>
                    <th>Breed</th>
                    <th>Notes</th>
                    <th>Appointment Type</th>
                    <th>Appointment Date</th>
                    <th>Appointment Time</th>
                </tr>
            </thead>
        <tbody>
        @foreach($approved as $approved)
            <tr>
                <td>{{ $approved->user_id }}</td>
                <td>{{ $approved->petName }}</td>
                <td>{{ $approved->petType }}</td>
                <td>{{ $approved->breed }}</td>
                <td>{{ $approved->notes }}</td>
                <td>{{ $approved->appointmentType }}</td>
                <td>{{ $approved->appointmentDate }}</td>
                <td>{{ $approved->appointmentTime }}</td>
            </tr>
        @endforeach
        </tbody>
        </table>
    <h2>Pending</h2>
    <table border="1" class="table table-responsive mt-3 w-100">
        <!-- Add Table Headers -->
        <thead>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Pet Name</th>
                <th>Pet Type</th>
                <th>Breed</th>
                <th>Notes</th>
                <th>Appointment Type</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
            </tr>
            </thead>
        </thead>
        <tbody>
        @foreach($pending as $pending)
            <tr>
                <td>{{ $pending->user_id }}</td>
                <td>{{ $pending->petName }}</td>
                <td>{{ $pending->petType }}</td>
                <td>{{ $pending->breed }}</td>
                <td>{{ $pending->notes }}</td>
                <td>{{ $pending->appointmentType }}</td>
                <td>{{ $pending->appointmentDate }}</td>
                <td>{{ $pending->appointmentTime }}</td>
            </tr>
        @endforeach
        </tbody>        
    </table>

    <!-- Rejected Table -->
    <h2>Rejected</h2>
    <table border="1" class="table table-responsive mt-3 w-100">
        <!-- Add Table Headers -->
        <thead>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Pet Name</th>
                <th>Pet Type</th>
                <th>Breed</th>
                <th>Notes</th>
                <th>Appointment Type</th>
                <th>Appointment Date</th>
                <th>Appointment Time</th>
            </tr>
         </thead>
        </thead>
        <tbody>
        @foreach($rejected as $rejected)
            <tr>
                <td>{{ $rejected->user_id }}</td>
                <td>{{ $rejected->petName }}</td>
                <td>{{ $rejected->petType }}</td>
                <td>{{ $rejected->breed }}</td>
                <td>{{ $rejected->notes }}</td>
                <td>{{ $rejected->appointmentType }}</td>
                <td>{{ $rejected->appointmentDate }}</td>
                <td>{{ $rejected->appointmentTime }}</td>
            </tr> 
        @endforeach      
        </tbody>
    </table>
</body>
</html>
