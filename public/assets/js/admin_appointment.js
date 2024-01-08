var completeActions = document.querySelectorAll('.complete-action');

//mark complete modal that will appear after clicking completeAction

//continue button for complete appointment
var confirmCompleteAction = document.querySelector('.confirm_complete');
confirmCompleteAction.addEventListener('click', updateStatusToCompleted);

function updateStatusToCompleted() {
    // Retrieve the selected row from the data attribute
    var selectedRow = completeModal.relatedRow;

    // Find the status cell within the selected row
    var statusCell = selectedRow.querySelector('.upcoming');

    // Change status if complete button was clicked
    completeModal.hide();
    statusCell.innerHTML = 'Completed';
    statusCell.classList.add('completed');
    
    
}
  
document.addEventListener('DOMContentLoaded', function () {
    
    

    var approve_appointment_tab_button = document.getElementById('approve_appointment_tab_button');
    var pending_appointment_tab_button = document.getElementById('pending_appointment_tab_button');
    var rejected_appointment_tab_button = document.getElementById('rejected_appointment_tab_button');

    var approved_appointment_btn = document.getElementById('approved_appointment_btn');
    var pending_appointment_btn = document.getElementById('pending_appointment_btn');
    var reject_appointment_btn = document.getElementById('reject_appointment_btn');
    var add_appointment_modal1 = new bootstrap.Modal(document.getElementById('add_appointment_modal'));

    approve_appointment_tab_button.addEventListener('click', function () {
        add_appointment_modal1.show();    
    });

    pending_appointment_tab_button.addEventListener('click', function () {
        add_appointment_modal1.show();    
    });

    rejected_appointment_tab_button.addEventListener('click', function () {
        add_appointment_modal1.show();    
    });
    




    var submit_pending_appointment = document.getElementById('submit_pending_appointment');
    


    
    submit_pending_appointment.addEventListener('click', function () {
        submitPendingAppointment();
        updatePendingCount();
        resetPendingInputFields();
        handleAddPendingAppointmentBtnVisibility();
        
        var emptyState = document.getElementById('pending_appointment_empty_state');
        var table = document.getElementById('pending_table');
        var pagination = document.getElementById('pending_pagination');

        add_appointment_modal1.hide();
        emptyState.style.display = 'none';
        table.style.display = 'flex';
        pagination.style.display = 'flex';

        // Call the visibility function after updating the UI
        handleAddPendingAppointmentBtnVisibility();
    });

    // Function to handle visibility of add_pending_appointment_split_btn
    function handleAddPendingAppointmentBtnVisibility() {
        var addPendingAppointmentBtn = document.getElementById('add_pending_appointment_split_btn');
        var approvedAppointmentEmptyState = document.getElementById('approved_appointment_empty_state');
        var rejectedAppointmentEmptyState = document.getElementById('rejected_appointment_empty_state');
        var pendingAppointmentEmptyState = document.getElementById('pending_appointment_empty_state');

        // Check if approved, rejected, and pending tabs don't contain their respective empty states
        if (!approvedAppointmentEmptyState && !rejectedAppointmentEmptyState && !pendingAppointmentEmptyState) {
            addPendingAppointmentBtn.style.display = 'flex';
        } else {
            // If any of the conditions are not met, hide the button
            addPendingAppointmentBtn.style.display = 'none';
        }
    }


    // Call the visibility function initially
    handleAddPendingAppointmentBtnVisibility();


    function unselectAndResetRadio(buttonId) {
        var button = document.getElementById(buttonId);
        
        if (button) {
            var radio = button.querySelector('.checkbox');
            
            if (radio) {
                // Unselect the radio button
                radio.checked = false;

                // Reset styles for the radio button using inline style
                radio.style.backgroundColor = '';
                radio.style.border = '';
            }
        }
    }

        
    function submitPendingAppointment() {
        setupSubmitPendingButton();
        
        // Assuming you have your input fields with the specified ids
        var ownerNameInput1 = document.getElementById('owner_name');
        var emailInput1 = document.getElementById('email');
        var petNameInput1 = document.getElementById('pet_name');
        var breedInput1 = document.getElementById('breed');
        var surgeryTypeInput1 = document.getElementById('surgery_type');
        var additionalNotesInput1 = document.getElementById('additional_notes');
        var appointmentDateInput1 = document.getElementById('appointment_date');
        var appointmentTimeInput1 = document.getElementById('appointment_time');

        // Get the table body
        var tableBody = document.getElementById('pendingTableBody');

        // Create a new row and cells
        var newRow = tableBody.insertRow();
        var checkboxCell = newRow.insertCell(0);
        var numberCell = newRow.insertCell(1);
        var ownerNameCell = newRow.insertCell(2);
        var statusCell = newRow.insertCell(3);
        var patientInfoCell = newRow.insertCell(4);
        var dateTimeCell = newRow.insertCell(5);
        var surgeryTypeCell = newRow.insertCell(6);
        var actionsCell = newRow.insertCell(7);

        // Populate cells with values
        checkboxCell.innerHTML = '<input type="checkbox">';
        // Assuming you have a variable for number or it can be dynamically generated
        numberCell.innerHTML = ''; // Replace with your logic for numbering
        
        ownerNameCell.innerHTML = `<span title="${ownerNameInput1.value || 'N/A'}">${ownerNameInput1.value || 'N/A'}</span>`;
        statusCell.innerHTML = 'Pending';
        statusCell.classList.add('pending');
        
        patientInfoCell.innerHTML = `<span title="Pet Name: ${petNameInput1.value || 'N/A'}&#13;Breed: ${breedInput1.value || 'N/A'}">${petNameInput1.value || 'N/A'}<br>${breedInput1.value || 'N/A'}</span>`;

        dateTimeCell.innerHTML = `<span title="Date: ${appointmentDateInput1.value || 'N/A'}&#13;Time: ${appointmentTimeInput1.value || 'N/A'}">${appointmentDateInput1.value || 'N/A'}<br>${appointmentTimeInput1.value || 'N/A'}</span>`;

        surgeryTypeCell.innerHTML = `<span title="Surgery Type: ${surgeryTypeInput1.value || 'N/A'}">${surgeryTypeInput1.value || 'N/A'}</span>`;
        
        // Create dropdown HTML for actionsCell
    actionsCell.innerHTML = `<div class="dropdown"><button class="btn dropbtn dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
    <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
    <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
    </svg></button>
        <div class="dropdown-menu"><a class="dropdown-item accept-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <g clip-path="url(#clip0_6291_1355)">
        <path d="M5 12L10 17L20 7" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <defs>
        <clipPath id="clip0_6291_1355">
        <rect width="24" height="24" fill="white"/>
        </clipPath>
    </defs>
    </svg> Accept</a><a class="dropdown-item reject-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <g clip-path="url(#clip0_6291_1893)">
        <path d="M18 6L6 18M6 6L18 18" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <defs>
        <clipPath id="clip0_6291_1893">
        <rect width="24" height="24" fill="white"/>
        </clipPath>
    </defs>
    </svg> Reject</a><a class="dropdown-item resched-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <g clip-path="url(#clip0_6291_2186)">
        <path d="M15.5 12H12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <defs>
        <clipPath id="clip0_6291_2186">
        <rect width="24" height="24" fill="white"/>
        </clipPath>
    </defs>
    </svg> Reschedule</a>
            <hr /><a class="dropdown-item archive-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <g clip-path="url(#clip0_6291_1005)">
        <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </g>
    <defs>
        <clipPath id="clip0_6291_1005">
        <rect width="24" height="24" fill="white"/>
        </clipPath>
    </defs>
    </svg> Archive</a>
        </div>
    </div>`;
        

        // Get the "Accept" dropdown item
        var acceptAction = newRow.querySelector('.accept-action');
        var rejectAction = newRow.querySelector('.reject-action');
        var reschedAction = newRow.querySelector('.resched-action');
        var archiveAction = newRow.querySelector('.archive-action');
        
        // Assuming you have references to the tables and buttons
        var approvedTableBody = document.getElementById('approvedTableBody');
        var pendingTableBody = document.getElementById('pendingTableBody');
        var rejectTableBody = document.getElementById('rejectedTableBody');

        // Variable to store the selected row
        var selectedRow;

        // `approved_appointment_empty_state` and `approved_table` are the IDs of empty state and table elements respectively
        var emptyState = document.getElementById('approved_appointment_empty_state');
        var approvedTable = document.getElementById('approved_table');
        
        var rejectEmptyState = document.getElementById('rejected_appointment_empty_state');
        var rejectTable = document.getElementById('rejected_table');
        
        

        // Add an event listener to show the modal when "Accept" is clicked
        acceptAction.addEventListener('click', function (event) {
            // Show the accept modal
            var acceptModal = new bootstrap.Modal(document.getElementById('accept_modal'));
            acceptModal.show();
            
            // Get the clicked button's parent row
            selectedRow = event.target.closest('tr');
            

            // Event listener for "Reject" button inside the modal
            var approve_btn = document.getElementById('confirm_approve_appointment_btn');
            approve_btn.addEventListener('click', function () {
                moveToApproveTable();
                
                // Call the function after moving the table row or any other relevant actions
            });
            
            function moveToApproveTable(){
                
                acceptModal.hide(); 
                // Move the data row to the approvedTableBody
            if (selectedRow) {
                // Append the selected row to the approvedTableBody
                approvedTableBody.appendChild(selectedRow);
                
                
                // Check if the empty state is visible and hide it
                if (emptyState.style.display !== 'none') {
                    emptyState.style.display = 'none';
                    // Make the approved table visible
                    approvedTable.style.display = 'flex'; // Adjust this if your table has a different display style
                }
                
            }

            
            // Find the status cell within the selected row
            var statusCell = selectedRow.querySelector('.pending');

            statusCell.classList.remove('pending');
            statusCell.innerHTML = 'Upcoming';
            statusCell.classList.add('upcoming');
            
            // Create a new cell after the statusCell
            var notesCell = selectedRow.insertCell(7); // Assuming it's the fifth cell, adjust the index accordingly

            // Populate notesCell with values
            notesCell.innerHTML = `<span title="${additionalNotesInput1.value || 'N/A'}">${additionalNotesInput1.value || 'N/A'}</span>`;
            
            
            actionsCell.innerHTML = `<div class="dropdown"><button class="btn dropbtn dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
        <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
        <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
        </svg> </button>
            <div class="dropdown-menu"><a class="dropdown-item complete-action"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="12" viewBox="0 0 22 12" fill="none">
        <path d="M6 6L11 11L21 1M1 6L6 11M11 6L16 1" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg> Mark as complete</a>
                <hr /><a class="dropdown-item archive-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_6291_1005)">
            <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
            <clipPath id="clip0_6291_1005">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
        </defs>
        </svg> Archive</a>
            </div>
        </div>`;
            
                //mark as complete menu item
        var completeActions = document.querySelectorAll('.complete-action');

        //mark complete modal that will appear after clicking completeAction
        var completeModal = new bootstrap.Modal(document.getElementById('mark_complete_modal'));

        completeActions.forEach(function(completeAction) {
            completeAction.addEventListener('click', function() {
                // Store the selected row in a data attribute
                completeModal.relatedRow = completeAction.closest('tr');
                completeModal.show();
            });
        });

        //continue button for complete appointment
        var confirmCompleteAction = document.querySelector('.confirm_complete');
        confirmCompleteAction.addEventListener('click', updateStatusToCompleted);

        function updateStatusToCompleted() {
            // Retrieve the selected row from the data attribute
            var selectedRow = completeModal.relatedRow;

            // Find the status cell within the selected row
            var statusCell = selectedRow.querySelector('.upcoming');

            // Change status if complete button was clicked
            completeModal.hide();
            statusCell.innerHTML = 'Completed';
            statusCell.classList.add('completed');
            
            
        }
                
        updateApprovedCount();
        updatePendingCount();
        checkPendingTableEmptyState();
                
            }
        resetPendingInputFields();
            
        function checkPendingTableEmptyState() {
                var pendingTableBody = document.getElementById('pendingTableBody');
                var pendingEmptyState = document.getElementById('pending_appointment_empty_state');
                var pendingTable = document.getElementById('pending_table');
                var pendingPagination = document.getElementById('pending_pagination');

                // Check if there are table rows inside pendingTableBody
                var hasRows = pendingTableBody.querySelectorAll('tr').length > 0;

                // Toggle the visibility of the empty state based on whether there are rows or not
                if (hasRows) {
                    pendingEmptyState.style.display = 'none'; // Hide the empty state
                } else {
                    pendingEmptyState.style.display = 'flex'; // Show the empty state
                    pendingTable.style.display = 'none'; //hide the table and pagination
                    pendingPagination.style.display = 'none';
                }
            }
        
            


            
            
            var approvedPagination = document.getElementById('pagination');
            approvedPagination.style.display = 'flex';

    
        });
    
        // Event listener for "Reject" button click
        rejectAction.addEventListener('click', function (event) {
            // Get the clicked button's parent row
            selectedRow = event.target.closest('tr');

            // Show the reject modal
            var rejectModal = new bootstrap.Modal(document.getElementById('reject_modal'));
            rejectModal.show();

            // Event listener for "Reject" button inside the modal
            var reject_btn = document.getElementById('reject_btn');
            reject_btn.addEventListener('click', function () {
                moveToRejectedTable();
                // Call the function after moving the table row or any other relevant actions
                checkPendingTableEmptyState();
            });
            function moveToRejectedTable(){
                
            var statusCell = selectedRow.querySelector('.pending');
            statusCell.classList.remove('pending');
            
            // Move the data row to the rejectTableBody
            if (selectedRow) {
                        // Append the selected row to the rejectedTableBody
                        rejectTableBody.appendChild(selectedRow);


                        // Check if the empty state is visible and hide it
                        if (rejectEmptyState.style.display !== 'none') {
                            rejectEmptyState.style.display = 'none';
                            // Make the reject table visible
                            rejectTable.style.display = 'flex'; 
                        }

                    }
            
            
            var patientInfoCell = selectedRow.querySelector(':nth-child(4)'); 
            var dateTimeCell = selectedRow.querySelector(':nth-child(5)');     
            var surgeryTypeCell = selectedRow.querySelector(':nth-child(6)'); 

            patientInfoCell.innerHTML = petNameInput1.value + ' (' + breedInput1.value + ')' || 'N/A';
            dateTimeCell.innerHTML = (appointmentDateInput1.value || 'N/A') + '<br>' + (appointmentTimeInput1.value || 'N/A');
            surgeryTypeCell.innerHTML = surgeryTypeInput1.value || 'N/A';


            
            var reasonInput = document.getElementById('rejection_reason');
            var specify_reasonInput = document.getElementById('specify_reason');
            var reasonCell = selectedRow.querySelector(':nth-child(7)');

            if (reasonInput.value !== '') {
                if (reasonInput.value.toLowerCase() !== 'other') {
                    reasonCell.innerHTML = reasonInput.value;
                } else {
                    reasonCell.innerHTML = specify_reasonInput.value || 'N/A';
                }
            } else {
                reasonCell.innerHTML = 'N/A';
            }

            
            
            
            actionsCell.innerHTML = `<div class="dropdown"><button class="btn dropbtn dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <path d="M9 5C7.61929 5 6.5 3.88071 6.5 2.5C6.5 1.11929 7.61929 -6.03528e-08 9 0C10.3807 6.03528e-08 11.5 1.11929 11.5 2.5C11.5 3.88071 10.3807 5 9 5Z" fill="#045B62"/>
        <path d="M9 11.5C7.61929 11.5 6.5 10.3807 6.5 9C6.5 7.61929 7.61929 6.5 9 6.5C10.3807 6.5 11.5 7.61929 11.5 9C11.5 10.3807 10.3807 11.5 9 11.5Z" fill="#045B62"/>
        <path d="M9 18C7.61929 18 6.5 16.8807 6.5 15.5C6.5 14.1193 7.61929 13 9 13C10.3807 13 11.5 14.1193 11.5 15.5C11.5 16.8807 10.3807 18 9 18Z" fill="#045B62"/>
        </svg></button>
            <div class="dropdown-menu"><a class="dropdown-item resched-action" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_6291_1874)">
            <path d="M15.5 12H12V7M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
            <clipPath id="clip0_6291_1874">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
        </defs>
        </svg> Reschedule</a><hr /><a class="dropdown-item archive-action"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <g clip-path="url(#clip0_6291_1005)">
            <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
            <clipPath id="clip0_6291_1005">
            <rect width="24" height="24" fill="white"/>
            </clipPath>
        </defs>
        </svg> Archive</a>
            </div>
        </div>`;


                updateRejectedCount();
                updatePendingCount();
    
                // Add an event listener to show the modal when "Reject" is clicked
            var reschedAction = newRow.querySelector('.resched-action');

            // Add an event listener to show the modal when "Reject" is clicked
            reschedAction.addEventListener('click', function() {

                var reschedModal1 = new bootstrap.Modal(document.getElementById('resched_modal-1'));
                reschedModal1.show();
            });

            var archiveAction = newRow.querySelector('.archive-action');

            archiveAction.addEventListener('click', function() {
                // Assuming you have your modal with the ID 'acceptModal'
                var archiveModal = new bootstrap.Modal(document.getElementById('archive_modal'));
                archiveModal.show();
            });
            
            var rejectPagination = document.getElementById('rejected_pagination');
            rejectPagination.style.display = 'flex';
                
            resetPendingInputFields();
            rejectModal.hide();
            }
            
        function checkPendingTableEmptyState() {
                var pendingTableBody = document.getElementById('pendingTableBody');
                var pendingEmptyState = document.getElementById('pending_appointment_empty_state');
                var pendingTable = document.getElementById('pending_table');
                var pendingPagination = document.getElementById('pending_pagination');

                // Check if there are table rows inside pendingTableBody
                var hasRows = pendingTableBody.querySelectorAll('tr').length > 0;

                // Toggle the visibility of the empty state based on whether there are rows or not
                if (hasRows) {
                    pendingEmptyState.style.display = 'none'; // Hide the empty state
                } else {
                    pendingEmptyState.style.display = 'flex'; // Show the empty state
                    pendingTable.style.display = 'none'; //hide the table and pagination
                    pendingPagination.style.display = 'none';
                }
            }
        });
    

        // Add an event listener to show the modal when "Resched" is clicked
        reschedAction.addEventListener('click', function() {
            
            var reschedModal = new bootstrap.Modal(document.getElementById('resched_modal'));
            reschedModal.show();
        });
        
        
        archiveAction.addEventListener('click', function() {
            // Assuming you have your modal with the ID 'acceptModal'
            var archiveModal = new bootstrap.Modal(document.getElementById('archive_modal'));
            archiveModal.show();
        });
        

    }
        //reset input fields on add_appointment_modal-2
    function resetPendingInputFields() {
        
        var ownerNameInput1 = document.getElementById('owner_name');
        var emailInput1 = document.getElementById('email');
        var petNameInput1 = document.getElementById('pet_name');
        var breedInput1 = document.getElementById('breed');
        var surgeryTypeInput1 = document.getElementById('surgery_type');
        var additionalNotesInput1 = document.getElementById('additional_notes');
        var appointmentDateInput1 = document.getElementById('appointment_date');
        var appointmentTimeInput1 = document.getElementById('appointment_time');
            

        ownerNameInput1.value = '';
        emailInput1.value = '';
        petNameInput1.value = '';
        breedInput1.value = '';
        breedInput1.disabled = true;
        surgeryTypeInput1.value = '';
        additionalNotesInput1.value = '';
        appointmentDateInput1.value = '';
        appointmentTimeInput1.value = '';
        
        unselectAndResetRadio('dog');
        unselectAndResetRadio('cat');
        
    }

    function updateApprovedCount() {
        const tbody = document.getElementById('approvedTableBody');
        const countSpan = document.getElementById('approvedCount');

        if (tbody && countSpan) {
            const rows = tbody.getElementsByTagName('tr');
            countSpan.textContent = rows.length.toString();
            return true; // Return true if count is successfully updated
        } else {
            return false; // Return false if either tbody or countSpan is not found
        }
    }
    updateApprovedCount();
        
    function updatePendingCount() {
        // Get the tbody element by ID
        const tbody = document.getElementById('pendingTableBody');

        // Get the span element for count by ID
        const countSpan = document.getElementById('pendingCount');

        // Check if both tbody and countSpan elements exist
        if (tbody && countSpan) {
            // Get all rows within the tbody
            const rows = tbody.getElementsByTagName('tr');

            // Update the content of the span with the count of rows
            countSpan.textContent = rows.length.toString();
        }
    }
    updatePendingCount();

    function updateRejectedCount() {
        // Get the tbody element by ID
        const tbody = document.getElementById('rejectedTableBody');

        // Get the span element for count by ID
        const countSpan = document.getElementById('rejectedCount');

        // Check if both tbody and countSpan elements exist
        if (tbody && countSpan) {
            // Get all rows within the tbody
            const rows = tbody.getElementsByTagName('tr');

            // Update the content of the span with the count of rows
            countSpan.textContent = rows.length.toString();
        }
    }
    updateRejectedCount();
   
    //split button for pending appointment button

        
    pending_appointment_btn.addEventListener('click', function() {
        add_appointment_modal1.show(); 
    });
    
    approved_appointment_btn.addEventListener('click', function() {
        add_appointment_modal1.show(); 
    });

    reject_appointment_btn.addEventListener('click', function() {
        add_appointment_modal1.show(); 
    });
    


    function setupSubmitPendingButton() {
        // Get the submit button by its ID
        var submitButton = document.getElementById('submit_pending_appointment');
    
        // Initially, disable the submit button
        submitButton.disabled = true;
    
        // Get the input elements by their IDs
        var emailInput = document.getElementById('email');
        var breedInput = document.getElementById('breed');
        var surgeryTypeInput = document.getElementById('surgery_type');
        var appointmentDateInput = document.getElementById('appointment_date');
        var appointmentTimeInput = document.getElementById('appointment_time');
    
        // Add input event listeners to each input
        [emailInput, breedInput, surgeryTypeInput, appointmentDateInput, appointmentTimeInput].forEach(function (input) {
            input.addEventListener('input', function () {
                updateSubmitButtonState();
            });
        });
    
        // Function to update the submit button state
        function updateSubmitButtonState() {
            // Check if all required inputs have values
            var isEmailValid = emailInput.value.trim() !== '';  // You can add email validation logic if needed
            var isBreedValid = breedInput.value.trim() !== '';
            var isSurgeryTypeValid = surgeryTypeInput.value.trim() !== '';
            var isAppointmentDateValid = appointmentDateInput.value.trim() !== '';
            var isAppointmentTimeValid = appointmentTimeInput.value.trim() !== '';
    
            // Enable or disable the submit button based on the conditions
            submitButton.disabled = !(isEmailValid && isBreedValid && isSurgeryTypeValid && isAppointmentDateValid && isAppointmentTimeValid);
        }
    }
    setupSubmitPendingButton();


        // Assuming you have references to the tabs
    var approveTab = document.getElementById('approve_tab');
    var pendingTab = document.getElementById('pending-tab');
    var rejectTab = document.getElementById('reject_tab');


    var approvedEmptyState = document.getElementById('approved_appointment_empty_state');
    var pendingEmptyState = document.getElementById('pending_appointment_empty_state');
    var rejectedEmptyState = document.getElementById('rejected_appointment_empty_state');

    approveTab.addEventListener('click', function () {
        approveBtn = document.getElementById('add_approve_appointment_split_btn');
        pendingBtn = document.getElementById('add_pending_appointment_split_btn');
        rejectBtn = document.getElementById('add_rejected_appointment_split_btn');
        
        if (approvedEmptyState.style.display !== 'none') {
            // If approved_appointment_empty_state is visible, hide all buttons
            approveBtn.style.display = 'none';
            pendingBtn.style.display = 'none';
            rejectBtn.style.display = 'none';
        } else {
            // If approved_appointment_empty_state is not visible, display add_approve_appointment_split_btn
            approveBtn.style.display = 'flex';
            pendingBtn.style.display = 'none';
            rejectBtn.style.display = 'none';// explicitly hide add_reject_appointment_split_btn
        }
    });
        
    pendingTab.addEventListener('click', function () {
        approveBtn = document.getElementById('add_approve_appointment_split_btn');
        pendingBtn = document.getElementById('add_pending_appointment_split_btn');
        rejectBtn = document.getElementById('add_rejected_appointment_split_btn');
        
        if (pendingEmptyState.style.display !== 'none') {
            // If rejected_appointment_empty_state is visible, display add_reject_appointment_split_btn
            approveBtn.style.display = 'none';
            pendingBtn.style.display = 'none';
            rejectBtn.style.display = 'none';
        } else {
            // If rejected_appointment_empty_state is not visible, hide all buttons including add_reject_appointment_split_btn
            approveBtn.style.display = 'none';
            pendingBtn.style.display = 'flex';
            rejectBtn.style.display = 'none';
        }
    });

    rejectTab.addEventListener('click', function () {
        approveBtn = document.getElementById('add_approve_appointment_split_btn');
        pendingBtn = document.getElementById('add_pending_appointment_split_btn');
        rejectBtn = document.getElementById('add_rejected_appointment_split_btn');
        
        if (rejectedEmptyState.style.display !== 'none') {
            // If rejected_appointment_empty_state is visible, display add_reject_appointment_split_btn
            approveBtn.style.display = 'none';
            pendingBtn.style.display = 'none';
            rejectBtn.style.display = 'none';
        } else {
            // If rejected_appointment_empty_state is not visible, hide all buttons including add_reject_appointment_split_btn
            approveBtn.style.display = 'none';
            pendingBtn.style.display = 'none';
            rejectBtn.style.display = 'flex';
        }
    });
 
});

function checkRadio(buttonId) {
    var button = document.getElementById(buttonId);
    if (button) {
        var radio = button.querySelector('.checkbox');
        if (radio) {
            radio.checked = true;

            // Apply styles to the active (checked) radio button using inline style
            radio.style.backgroundColor = 'var(--Colors-Actions-action-active, #004D53)';
            radio.style.border = '1px solid var(--Colors-Actions-action-active, #004D53)';

            // Uncheck other radio buttons in the same group and reset their styles
            var otherRadios = document.querySelectorAll('#' + buttonId + ' .checkbox[name="species"]');
            otherRadios.forEach(function (otherRadio) {
                if (otherRadio.id !== radio.id) {
                    otherRadio.checked = false;

                    // Reset styles for other radio buttons using inline style
                    otherRadio.style.backgroundColor = '';
                    otherRadio.style.border = '';
                }
            });
        }
    }
}

function selectBreed(species) {
    var breedSelect = document.getElementById('breed');
    breedSelect.disabled = false;
    breedSelect.innerHTML = ''; // Clear previous options

    // Add the initial "Please select a breed" option
    var initialOption = document.createElement('option');
    initialOption.value = '';
    initialOption.text = 'Please select a breed';
    breedSelect.add(initialOption);

    // Populate the breed select based on the selected species
    var breedOptions;
    if (species === 'dog') {
        breedOptions = ["Affenpinscher","Afghan Hound","Airedale Terrier","Akita","Alaskan Malamute","American Bulldog","American Eskimo Dog","American Foxhound","American Pit Bull Terrier","American Staffordshire Terrier","Anatolian Shepherd Dog","Australian Cattle Dog","Australian Shepherd","Australian Terrier","Basenji","Basset Hound","Beagle","Bearded Collie","Bedlington Terrier","Belgian Malinois","Belgian Sheepdog","Belgian Tervuren","Bernese Mountain Dog","Bichon Frise","Black and Tan Coonhound","Bloodhound","Border Collie","Border Terrier","Borzoi","Boston Terrier","Bouvier des Flandres","Boxer","Boykin Spaniel","Briard","Brittany","Brussels Griffon","Bull Terrier","Bulldog","Bullmastiff","Cairn Terrier","Canaan Dog","Cane Corso","Cardigan Welsh Corgi","Cavalier King Charles Spaniel","Chesapeake Bay Retriever","Chihuahua","Chinese Crested","Chinese Shar-Pei","Chow Chow","Clumber Spaniel","Cockapoo","Collie","Coonhound","Corgi","Coton de Tulear","Curly-Coated Retriever","Dachshund","Dalmatian","Dandie Dinmont Terrier","Doberman Pinscher","Dogue de Bordeaux","Dutch Shepherd","English Bulldog","English Cocker Spaniel","English Foxhound","English Setter","English Springer Spaniel","English Toy Spaniel","Entlebucher Mountain Dog","Eskimo Dog","Finnish Lapphund","Finnish Spitz","Flat-Coated Retriever","French Bulldog","German Pinscher","German Shepherd Dog","German Shorthaired Pointer","German Wirehaired Pointer","Giant Schnauzer","Glen of Imaal Terrier","Goldador","Golden Retriever","Goldendoodle","Gordon Setter","Great Dane","Great Pyrenees","Greater Swiss Mountain Dog","Greyhound","Harrier","Havanese","Hound","Hovawart","Hungarian Puli","Hungarian Shepherd","Hungarian Vizsla","Husky","Ibizan Hound","Icelandic Sheepdog","Irish Setter","Irish Terrier","Irish Water Spaniel","Irish Wolfhound","Italian Greyhound","Jack Russell Terrier","Japanese Chin","Japanese Spitz","Japanese Terrier","Keeshond","Kerry Blue Terrier","King Charles Spaniel","Klee Kai","Kuvasz","Labradoodle","Labrador Retriever","Lakeland Terrier","Lancashire Heeler","Leonberger","Lhasa Apso","Lowchen","Maltese","Manchester Terrier","Maremma Sheepdog","Mastiff","Miniature Bull Terrier","Miniature Pinscher","Miniature Schnauzer","Mixed Breed","Mountain Cur","Mountain Dog","Neapolitan Mastiff","Newfoundland","Norfolk Terrier","Norwegian Buhund","Norwegian Elkhound","Norwegian Lundehund","Norwich Terrier","Nova Scotia Duck Tolling Retriever","Old English Sheepdog","Otterhound","Papillon","Pekingese","Pembroke Welsh Corgi","Pharaoh Hound","Pinscher","Pit Bull Terrier","Plott Hound","Podenco Canario","Pointer","Polish Lowland Sheepdog","Pomeranian","Poodle","Portuguese Water Dog","Presacanario","Pug","Puggle","Puli","Pumi","Pyrenees","Redbone Coonhound","Retriever","Rhodesian Ridgeback","Rottweiler","Saint Bernard","Saluki","Samoyed","Schipperke","Scottish Deerhound","Scottish Terrier","Sealyham Terrier","Setter","Shar-Pei","Sheltie","Shiba Inu","Shih Tzu","Siberian Husky","Silky Terrier","Skye Terrier","Sloughi","Small Munsterlander Pointer","Spaniel","Spanish Water Dog","Spitz","Springer Spaniel","Staffordshire Bull Terrier","Standard Schnauzer","Sussex Spaniel","Swedish Vallhund","Terrier","Thai Ridgeback","Tibetan Mastiff","Tibetan Spaniel","Tibetan Terrier","Tosa Inu","Toy Fox Terrier","Treeing Walker Coonhound","Vizsla","Weimaraner","Welsh Corgi","Welsh Terrier","West Highland White Terrier","Whippet","White Shepherd","Wirehaired Pointing Griffon","Xoloitzcuintli","Yorkshire Terrier"];
    } else if (species === 'cat') {
        breedOptions = ["Abyssinian","American Bobtail","American Curl","American Shorthair","American Wirehair","Balinese","Bengal","Birman","Bombay","British Shorthair","Burmese","Chartreux","Chausie","Cornish Rex","Cymric","Devon Rex","Egyptian Mau","European Burmese","Exotic Shorthair","Havana Brown","Himalayan","Japanese Bobtail","Javanese","Korat","LaPerm","Maine Coon","Manx","Munchkin","Nebelung","Norwegian Forest","Ocicat","Oriental","Persian","Pixie-Bob","Ragamuffin","Ragdoll","Russian Blue","Savannah","Scottish Fold","Selkirk Rex","Siamese","Siberian","Singapura","Snowshoe","Somali","Sphynx","Tonkinese","Turkish Angora","Turkish Van"];
    }

    // Add options to the breed select
    breedOptions.forEach(function (breed) {
        var option = document.createElement('option');
        option.value = breed;
        option.text = breed;
        breedSelect.add(option);
    });
}



var rejection_reason = document.getElementById('rejection_reason');
var specific_reason = document.getElementById('specific_reason');
var rejection_reason1 = document.getElementById('rejection_reason-1');
var specific_reason1 = document.getElementById('specific_reason-1');


rejection_reason.addEventListener('change', function () {
            if (rejection_reason.value === 'other') {
                specific_reason.style.display = 'flex';
            }   else if (rejection_reason.value !== 'other'){
                specific_reason.style.display = 'none';
            } 
        });

rejection_reason1.addEventListener('change', function () {
            if (rejection_reason1.value === 'other') {
                specific_reason1.style.display = 'flex';
            }   else if (rejection_reason1.value !== 'other'){
                specific_reason1.style.display = 'none';
            } 
        });



var selectAllapproved = document.getElementById("selectAll_approve");

selectAllapproved.addEventListener("click", function () {
    var tableBody = document.getElementById('approvedTableBody');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });

});


var selectAllpending = document.getElementById("selectAll_pending");

selectAllpending.addEventListener("click", function () {
    var tableBody = document.getElementById('pendingTableBody');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });
});

var selectAllreject = document.getElementById("selectAll_rejected");

selectAllreject.addEventListener("click", function () {
    var tableBody = document.getElementById('rejectedTableBody');
    var rowCheckboxes = tableBody.querySelectorAll("input[type='checkbox']");

    rowCheckboxes.forEach(function (checkbox) {
        checkbox.checked = !checkbox.checked; // Toggle the state
    });
});


function setupEmailValidation() {
    // Get the email input element by its ID
    var emailInput = document.getElementById('email');

    // Flag to track whether the input is in focus
    var isInputInFocus = false;

    // Add focus and blur event listeners
    emailInput.addEventListener('focus', function () {
        isInputInFocus = true;
    });

    emailInput.addEventListener('blur', function () {
        isInputInFocus = false;
        validateEmail();
    });

    // Input event listener
    emailInput.addEventListener('input', function () {
        validateEmail();
    });

    // Function to validate email
    function validateEmail() {
        // Get the entered email value
        var enteredEmail = emailInput.value.toLowerCase();

        // Check if the email ends with @gmail.com or @yahoo.com
        if (enteredEmail.endsWith('@gmail.com') || enteredEmail.endsWith('@yahoo.com')) {
            // Valid email, no error message
            // You can customize this part to hide or clear any existing error messages
            console.log('Valid email');
        } else if (!isInputInFocus) {
            // Invalid email, show error message only when not in focus
            alert('Please enter a valid email ending with @gmail.com or @yahoo.com.');
            // You can customize this part to display an error message to the user
            // or add a CSS class to highlight the input field as invalid
        }
    }
}


// Call the function to set up email validation
setupEmailValidation();



function setupDateInputRestrictions() {
    // Get the current date
    var currentDate = new Date();
    var currentDateString = currentDate.toISOString().split('T')[0]; // Format: YYYY-MM-DD

    // Get the date input elements by their IDs
    var dateInputs = [
        document.getElementById('appointment_date'),
        document.getElementById('appointment_date-1'),
        document.getElementById('appointment_date-2'),
        document.getElementById('appointment_date-3'),
        document.getElementById('appointment_date-4')
    ];

    // Add event listeners to each date input
    dateInputs.forEach(function (dateInput) {
        // Set the minimum attribute to the current date
        dateInput.setAttribute('min', currentDateString);

        // Add an event listener to disable keyboard events
        dateInput.addEventListener('keydown', function (event) {
            event.preventDefault();
        });

        // Add an event listener to validate on input change
        dateInput.addEventListener('input', function () {
            // Parse the input date value
            var selectedDate = new Date(dateInput.value);

            // Compare the selected date with the current date
            if (selectedDate < currentDate) {
                alert('Please select a date from present to future.');
                dateInput.value = currentDateString; // Reset to the current date
            }
        });
    });
}

// Call the function to set up date input restrictions
setupDateInputRestrictions();

function setupTimeInputRestrictions() {
    // Get the current time
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();

    // Get the time input elements by their IDs
    var timeInputs = [
        document.getElementById('appointment_time'),
        document.getElementById('appointment_time-1'),
        document.getElementById('appointment_time-2'),
        document.getElementById('appointment_time-3'),
        document.getElementById('appointment_time-4')
    ];

    // Add event listeners to each time input
    timeInputs.forEach(function (timeInput) {
        // Add an event listener to disable keyboard events
        timeInput.addEventListener('keydown', function (event) {
            event.preventDefault();
        });

        // Add an event listener to validate on input change
        timeInput.addEventListener('input', function () {
            // Parse the input time value
            var selectedHours = parseInt(timeInput.value.split(':')[0], 10);
            var selectedMinutes = parseInt(timeInput.value.split(':')[1], 10);

            // Compare the selected time with the current time
            if (selectedHours < currentHours || (selectedHours === currentHours && selectedMinutes < currentMinutes)) {
                alert('Please select a time from present to future.');
                // Reset to the current time
                timeInput.value = (currentHours < 10 ? '0' : '') + currentHours + ':' + (currentMinutes < 10 ? '0' : '') + currentMinutes;
            }
        });
    });
}

// Call the function to set up time input restrictions
setupTimeInputRestrictions();






resetPendingInputFields();







function setupRescheduleButton() {
    // Get the reschedule button by its ID
    var rescheduleButton = document.getElementById('reschedule_btn');

    // Initially, disable the reschedule button
    rescheduleButton.disabled = true;

    // Get the input elements by their IDs
    var appointmentDateInput = document.getElementById('appointment_date-3');
    var appointmentTimeInput = document.getElementById('appointment_time-3');
    var rejectionReasonInput = document.getElementById('rejection_reason-1');
    var specifyReasonInput = document.getElementById('specify_reason-1');
    
    

    // Add input event listeners to each input
    [appointmentDateInput, appointmentTimeInput, rejectionReasonInput, specifyReasonInput].forEach(function (input) {
        input.addEventListener('input', function () {
            updateRescheduleButtonState();
        });
    });

    // Function to update the reschedule button state
    function updateRescheduleButtonState() {
        // Check if all required inputs have values
        var isAppointmentDateValid = appointmentDateInput.value.trim() !== '';
        var isAppointmentTimeValid = appointmentTimeInput.value.trim() !== '';
        var isRejectionReasonValid = rejectionReasonInput.value.trim() !== '';
        var isSpecifyReasonValid = specifyReasonInput.value.trim() !== '' || rejectionReasonInput.value.trim() !== 'other';

        // Enable or disable the reschedule button based on the conditions
        rescheduleButton.disabled = !(isAppointmentDateValid && isAppointmentTimeValid && isRejectionReasonValid && isSpecifyReasonValid);
    }
    // Close the resched_modal
    var reschedModal = new bootstrap.Modal(document.getElementById('resched_modal'));
    
    rescheduleButton.addEventListener('click', function() {
        
        
        reschedModal.hide();
        resetReschedInputFields();
        console.log('Reschedule button clicked'); // Log to check if the event is triggered
        // Show the success_reschedule_modal
        var successRescheduleModal = new bootstrap.Modal(document.getElementById('success_reschedule_modal'));
        successRescheduleModal.show();

        setTimeout(function () {
            successRescheduleModal.hide();
            console.log('Success modal hidden'); // Log to check if the success modal hides after a delay
        }, 2000);
        
        
    });

}

// Call the function to set up the reschedule button for your specific form
setupRescheduleButton();


function setupRescheduleButton1() {
    // Get the reschedule button by its ID
    var rescheduleButton = document.getElementById('reschedule_btn-1');

    // Initially, disable the reschedule button
    rescheduleButton.disabled = true;

    // Get the input elements by their IDs
    var appointmentDateInput = document.getElementById('appointment_date-4');
    var appointmentTimeInput = document.getElementById('appointment_time-4');

    
    

    // Add input event listeners to each input
    [appointmentDateInput, appointmentTimeInput].forEach(function (input) {
        input.addEventListener('input', function () {
            updateRescheduleButtonState();
        });
    });

    // Function to update the reschedule button state
    function updateRescheduleButtonState() {
        // Check if all required inputs have values
        var isAppointmentDateValid = appointmentDateInput.value.trim() !== '';
        var isAppointmentTimeValid = appointmentTimeInput.value.trim() !== '';

        // Enable or disable the reschedule button based on the conditions
        rescheduleButton.disabled = !(isAppointmentDateValid && isAppointmentTimeValid);
    }
    // Close the resched_modal
    var reschedModal = new bootstrap.Modal(document.getElementById('resched_modal-1'));
    
    rescheduleButton.addEventListener('click', function() {
        
        
        reschedModal.hide();
        resetReschedInputFields1()
        console.log('Reschedule button clicked'); // Log to check if the event is triggered
        // Show the success_reschedule_modal
        var successRescheduleModal = new bootstrap.Modal(document.getElementById('success_reschedule_modal'));
        successRescheduleModal.show();

        setTimeout(function () {
            successRescheduleModal.hide();
            console.log('Success modal hidden'); // Log to check if the success modal hides after a delay
        }, 2000);
    });

}

setupRescheduleButton1();


//reset input for reschedule
function resetReschedInputFields() {
    var dateInput = document.getElementById('appointment_date-3');
    var timeInput = document.getElementById('appointment_time-3');
    var reasonInput = document.getElementById('rejection_reason-1');

    dateInput.value = '';
    timeInput.value = '';
    reasonInput.value = '';
}



// button id 'cancel_reschedule_btn'
var cancelRescheduleBtn = document.getElementById('cancel_reschedule_btn');

// Add an event listener to the cancel_reschedule_btn
cancelRescheduleBtn.addEventListener('click', function() {
    // Call the function to reset the input fields
    resetReschedInputFields();
});


//reset input for reschedule
function resetReschedInputFields1() {
    var dateInput = document.getElementById('appointment_date-4');
    var timeInput = document.getElementById('appointment_time-4');
    var reasonInput = document.getElementById('rejection_reason-2');

    dateInput.value = '';
    timeInput.value = '';
    reasonInput.value = '';
}