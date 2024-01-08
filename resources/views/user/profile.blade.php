<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Profile</title>
    @include('includes.head')
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="/img/dogs&cats.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans:300,400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('assets/css/bs-theme-overrides.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Bootstrap-4-Custom-Radio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Multi-step-form.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Navbar-Centered-Links-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/client.css') }}">  
</head>

<body>
 @include('includes.user_header')
    <main>
        <div class="container mb-4">
            <div class="row my_profile">
                <div class="col-lg-4 custom-sidebar">
                    <div class="card mt-4" style="border: none;">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item nav-item active mb-2"><a href="{{ route('client.profile') }}">My Profile</a></li>
                                <li class="list-group-item nav-item mb-2"><a href="#">Pet Information</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mb-5">
                    <div class="card-header" style="background: none;">
                            <h1 class="card-title">My Profile</h1>
                        </div>
                    <div class="card profile-container" style="border: none;">
                        <div class="card-body">
                            <div class="text-center mb-3">
                                <div class="profilepic-container">
                                    <div class="user-icon">
                                        <!-- Replace this with your user icon -->
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="personalInfo mb-3">
                                <div class="d-flex justify-content-between">
                                    <h2 class="mb-3" style="margin-left: 20px;">Personal Information</h2>
                                    <div class="icon-container">
                                    <i id="personalInfoEditIcon"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 15 15" fill="none">
                                            <path d="M7.27348 3.03876C7.42142 3.98497 7.87937 4.85527 8.57546 5.51304C9.27155 6.17081 10.1664 6.57882 11.1194 6.673M1 15H13.7022M8.24025 2.01553L2.44664 8.14787C2.22788 8.38074 2.01618 8.83943 1.97384 9.15699L1.71273 11.4434C1.621 12.269 2.21377 12.8336 3.03235 12.6924L5.30463 12.3043C5.62219 12.2479 6.06677 12.015 6.28553 11.7751L12.0791 5.64271C13.0812 4.5842 13.5328 3.37749 11.9733 1.90262C10.4208 0.441868 9.24232 0.957013 8.24025 2.01553Z" stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg></i>
                                    </div>
                                </div>
                                <form action="{{ route('edit.profile') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="input-field">
                                                    <label for="fname">First Name</label>
                                                    <input type="text" class="form-control mb-3 editable-input" id="fnameInput" placeholder="First Name" value="{{ $clientInfo->first_name }}" readonly>
                                                </div>
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control editable-input" id="emailInput" placeholder="Email" value="{{ $clientInfo->email }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <div class="input-field">
                                                    <label for="lname">Last Name</label>
                                                    <input type="text" class="form-control mb-3 editable-input" id="lnameInput" placeholder="Last Name" value="{{ $clientInfo->last_name }}" readonly>
                                                </div>
                                                <label for="contactNumber">Contact Number</label>
                                                <input type="tel" class="form-control editable-input" id="contactNumberInput" placeholder="Contact Number"  value="{{ $clientInfo->phone }}" readonly>
                                            </div>
                                            <div class="mb-3 d-flex justify-content-end">
                                                <button type="button" class="btn custom-save-btn" id="saveChangesButton">Save Changes</button>
                                            </div>                                           
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    

    <footer class="d-flex align-items-center" style="background: rgba(4,91,98,0.1);height: 200px;">
        <div class="container d-flex" style="height: 200px;">
            <div class="col d-lg-flex d-xl-flex d-xxl-flex justify-content-xl-start align-items-xl-center"><img class="flex-md-shrink-0 flex-lg-shrink-0 flex-xl-shrink-0 flex-xxl-shrink-0" src="{{ asset('img/dogs&cats.png') }}" width="167" height="149"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Add this script at the end of your HTML file or in a separate JavaScript file -->
    <script>
    const inputFields = document.querySelectorAll(".editable-input");
    const editIcon = document.getElementById("personalInfoEditIcon");
    const saveButton = document.getElementById("saveChangesButton");

    let editMode = false;
    let initialInputValues = {};

    // Function to toggle edit mode
    function toggleEditMode() {
        editMode = !editMode;

        inputFields.forEach(input => {
            if (editMode) {
                initialInputValues[input.id] = input.value;
                input.removeAttribute("readonly");
            } else {
                input.value = initialInputValues[input.id];
                input.setAttribute("readonly", "true");
            }
        });

        saveButton.style.display = editMode ? "block" : "none";
    }

    // Event listener for edit icon click
    editIcon.addEventListener("click", toggleEditMode);

    // Function to save changes
    async function saveChanges() {
        try {
            // Prepare the data to be sent to the server
            const data = {};
            inputFields.forEach(input => {
                data[input.id] = input.value;
            });

            // Make a POST request to your backend route or API endpoint
            const response = await fetch("your_save_route_url", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });

            // Check if the save was successful
            if (response.ok) {
                alert("Changes saved successfully!");
            } else {
                alert("Failed to save changes. Please try again later.");
            }

            toggleEditMode(); // Toggle off edit mode after saving changes
        } catch (error) {
            console.error("Error saving changes:", error);
            alert("An error occurred while saving changes. Please try again later.");
        }
    }

    // Event listener for save button click
    saveButton.addEventListener("click", saveChanges);
</script>







</body>

</html>