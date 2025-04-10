<!-- resources/views/admin/users.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin | Users</title>
</head>
<body>
    <x-app-layout>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr data-user-id="{{ $user->id }}" class="user-row">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal for Create Electronic Medical Records -->
        <div id="emrModal" style="display: none;">
            <h3>Create Electronic Medical Records for <span id="userFullName"></span></h3>
            <!-- Your form for creating electronic medical records goes here -->
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const userRows = document.querySelectorAll('.user-row');
                const emrModal = document.getElementById('emrModal');
                let isModalVisible = false;

                userRows.forEach(row => {
                    row.addEventListener('click', function () {
                        const userId = this.getAttribute('data-user-id');
                        const userFullName = this.children[1].textContent;

                        // Toggle the modal's display
                        if (isModalVisible) {
                            emrModal.style.display = 'none';
                        } else {
                            emrModal.style.display = 'block';
                            document.getElementById('userFullName').textContent = userFullName;
                        }

                        // Update the modal's state
                        isModalVisible = !isModalVisible;
                    });
                });
            });
        </script>

    </x-app-layout>
</body>
</html>
