// Add an event listener for the buttons inside dropdown-content
document.querySelectorAll('.button-action button').forEach(function (button) {
    button.addEventListener('click', function (event) {
        closeDropdownMenus();
        event.preventDefault();
        const action = this.getAttribute('data-action');
        if (action === 'View'){
            const client_container = document.getElementById('client_container');
            const view_client = document.getElementById('view_client');
            
            client_container.style.display = 'none';
            view_client.style.display= 'flex';
            
        }else if (action === 'Edit') {
            const edit_client_detail_header = document.getElementById('edit_client_detail_header');
            const edit_client = document.getElementById('edit_client');
            const client_header = document.getElementById('client_header');
            const client_container = document.getElementById('client_container');
                            
            client_header.style.display = 'none';
            client_container.style.display = 'none';
            edit_client_detail_header.style.display = 'flex';
            edit_client.style.display = 'flex';
            
        }else if (action === 'Archive') {
            // Handle the "Archive" action here
            // Add your logic for this action

            // Show the archive_modal
            var archive_modal = document.getElementById('archive_modal');
            if (archive_modal) {
                // Display the modal using Bootstrap's modal methods
                var bootstrapModal = new bootstrap.Modal(archive_modal);
                bootstrapModal.show();

                // Optionally, you can attach an event listener to the modal's confirm button
                var confirmButton = document.getElementById('archive_confirm_button');
                if (confirmButton) {
                    confirmButton.addEventListener('click', function() {
                        // User confirmed the archiving action
                        // Add your logic for this action

                        var row = button.closest('tr');
                        // Optionally, you can add an animation or confirmation dialog before archiving
                        // Perform the archiving logic (e.g., hide the row)
                        row.style.display = 'none';

                        // Close the archive_modal after archiving
                        bootstrapModal.hide();
                    });
                }
            }
        }

    });
});
        


// Function to close all dropdown menus
function closeDropdownMenus() {
    document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
        menu.style.display = 'none';
    });
}

// Event listener to close dropdown menus when clicking outside
document.addEventListener('click', function (event) {
    if (!event.target.matches('.dropbtn')) {
        closeDropdownMenus();
    }
});
       

document.querySelectorAll('.dropbtn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click event from propagating
        const content = this.nextElementSibling;
        if (content.style.display === 'flex') {
            content.style.display = 'none';
        } else {
            content.style.display = 'flex';
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    


    var add_client = document.getElementById('add_client');
    var add_client_btn = document.getElementById('add_client_btn');
    var archive_button = document.getElementById('archive_button');

    var add_client_modal = new bootstrap.Modal(document.getElementById('add_client_modal'));
    var add_client_modal1 = new bootstrap.Modal(document.getElementById('add_client_modal-1'));
    var archive_modal = new bootstrap.Modal(document.getElementById('archive_modal'));
    var archive_modal1 = new bootstrap.Modal(document.getElementById('archive_modal-1'));
                
    
    var add_client_success = new bootstrap.Modal(document.getElementById('add_client_success'));
    
    
    var submit_Client = document.getElementById('submit_Client');
  
    add_client.addEventListener('click', function () {
    add_client_modal.show();
        
        
  });
    
    add_client_btn.addEventListener('click', function () {
    add_client_modal1.show();
  });
    

    
  

    
    submit_Client.addEventListener('click', function () {
        add_client_modal.hide();
        add_client_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_client_success.hide();
        }, 2000);
    });
    
    archive_button.addEventListener('click', function () {
    // Assuming you have a function to get the selected data rows (replace it with your actual logic)
    var selectedDataRows = getSelectedDataRows();

    // Check the number of selected data rows
    if (selectedDataRows.length > 1) {
        // Show archive_modal2 if there are more than 1 selected data row
        archive_modal1.show();
    } else if (selectedDataRows.length === 1) {
        // Show archive_modal1 if there is only 1 selected data row
        archive_modal.show();
    } else {
        // Handle the case when no data row is selected, if needed
        console.log('No data row selected.');
    }
});

    // Function to get the selected data rows (replace it with your actual logic)
    function getSelectedDataRows() {
    // Implement the logic to retrieve selected data rows
    // For example, you might use a class or attribute to mark selected rows
    // and query the DOM to get those rows
    // For demonstration purposes, this function returns an array of selected rows
    return document.querySelectorAll('.selected-row');
}

        var empty_state_container = document.getElementById('empty_state_container');
        
        //hide empty state and show table container
        empty_state_container.style.display = 'none';
        //get reference IDs
        showAddClientSplitBtn();

        
    // Get form values
    var firstName = document.getElementById("first_name").value;
    var middleName = document.getElementById("middle_name").value;
    var lastName = document.getElementById("last_name").value;
    var suffix = document.getElementById("suffix").value;
    var birthdate = document.getElementById("client_birthdate").value;
    var address = document.getElementById("client_address").value;
    var email = document.getElementById("client_email").value;
    var phoneNumber = document.getElementById("user_phone").value;
        
        

    // // Construct the client data
    // var clientData = {
    //     name: firstName + ' ' + (middleName ? middleName + ' ' : '') + lastName + (suffix ? ' ' + suffix : ''),
    //     email: email,
    //     phoneNumber: phoneNumber,
    //     address: address,
    //     // Add more properties as needed
    // };

    // // Create a new row in the table
    // var tableBody = document.getElementById("client_table_body");
    // var newRow = tableBody.insertRow(tableBody.rows.length);

    // // Add cells to the new row
    // var checkboxCell = newRow.insertCell(0);
    // var nameCell = newRow.insertCell(1);
    // var emailCell = newRow.insertCell(2);
    // var phoneNumberCell = newRow.insertCell(3);
    // var addressCell = newRow.insertCell(4);
    // var visitsCell = newRow.insertCell(5);
    // var lastVisitCell = newRow.insertCell(6);
    // var actionCell = newRow.insertCell(7);

    // Populate cells with data
   
        
    
    // Optionally, you can add additional logic, such as resetting the form
    document.getElementById("add_client_form").reset();

// Add an event listener for the buttons inside dropdown-content
        document.querySelectorAll('.button-action button').forEach(function (button) {
    button.addEventListener('click', function (event) {
        closeDropdownMenus();
        event.preventDefault();
        const action = this.getAttribute('data-action');
        if (action === 'View'){
            const client_container = document.getElementById('client_container');
            const view_client = document.getElementById('view_client');
            
            client_container.style.display = 'none';
            view_client.style.display= 'flex';
            
        }else if (action === 'Edit') {
            const edit_client_detail_header = document.getElementById('edit_client_detail_header');
            const edit_client = document.getElementById('edit_client');
            const client_header = document.getElementById('client_header');
            const client_container = document.getElementById('client_container');
                            
            client_header.style.display = 'none';
            client_container.style.display = 'none';
            edit_client_detail_header.style.display = 'flex';
            edit_client.style.display = 'flex';
            
        }else if (action === 'Archive') {
            // Handle the "Archive" action here
            // Add your logic for this action

            // Show the archive_modal
            var archive_modal = document.getElementById('archive_modal');
            if (archive_modal) {
                // Display the modal using Bootstrap's modal methods
                var bootstrapModal = new bootstrap.Modal(archive_modal);
                bootstrapModal.show();

                // Optionally, you can attach an event listener to the modal's confirm button
                var confirmButton = document.getElementById('archive_confirm_button');
                if (confirmButton) {
                    confirmButton.addEventListener('click', function() {
                        // User confirmed the archiving action
                        // Add your logic for this action

                        var row = button.closest('tr');
                        // Optionally, you can add an animation or confirmation dialog before archiving
                        // Perform the archiving logic (e.g., hide the row)
                        row.style.display = 'none';

                        // Close the archive_modal after archiving
                        bootstrapModal.hide();
                    });
                }
            }
        }

    });
});
        




// Event listener to close dropdown menus when clicking outside
document.addEventListener('click', function (event) {
    if (!event.target.matches('.dropbtn')) {
        closeDropdownMenus();
    }
});
       
// Function to close all dropdown menus
function closeDropdownMenus() {
    document.querySelectorAll('.dropdown-content').forEach(function (menu) {
        menu.style.display = 'none';
    });
}

document.querySelectorAll('.dropbtn').forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.stopPropagation(); // Prevent the click event from propagating
        const content = this.nextElementSibling;
        const isVisible = window.getComputedStyle(content).display === 'flex';
        closeDropdownMenus(); // Close all dropdowns first
        if (!isVisible) {
            content.style.display = 'flex'; // Show if not already visible
        }
    });
});

// Close dropdown menus when clicking outside
document.addEventListener('click', function () {
    closeDropdownMenus();
});


        

    
    var cancel_edit = document.getElementById('cancel_edit');
    var edit_discard = new bootstrap.Modal(document.getElementById('edit_discard'));
    cancel_edit.addEventListener('click', function () {
        edit_discard.show();
      });
    
    var return_btn = document.getElementById('return_btn');
    return_btn.addEventListener('click', function () {
        edit_discard.hide();
      });
    
    var discard_btn = document.getElementById('discard_btn');
    discard_btn.addEventListener('click', function () {
        edit_discard.hide();
      });
    
    var edit_save_changes = document.getElementById('edit_save_changes');
    var save_changes_success = new bootstrap.Modal(document.getElementById('save_changes_success'));
    edit_save_changes.addEventListener('click', function () {
        save_changes_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            save_changes_success.hide();
        }, 2000);
      });
      
    
    
    function showAddClientSplitBtn() {
    var addClientSplitBtn = document.getElementById("add_client_split_btn");
    if (addClientSplitBtn) {
        addClientSplitBtn.style.display = "flex";
    }
}
    var view_client_back_btn = document.getElementById('view_client_back_btn');
    view_client_back_btn.addEventListener('click', function() {
        closeViewClientInfo();
    });
    
    var edit_client_back_btn = document.getElementById('edit_client_back_btn');
    edit_client_back_btn.addEventListener('click', function() {
        closeEditClientInfo();
    });
    
    function closeViewClientInfo(){
        const view_client = document.getElementById('view_client');
        const client_container = document.getElementById('client_container');

        client_container.style.display = 'flex';
        view_client.style.display = 'none';
    }
    
    function closeEditClientInfo(){
        const client_header = document.getElementById('client_header');
        const view_client = document.getElementById('client_container'); 
        const edit_client_detail_header = document.getElementById('edit_client_detail_header');
        const edit_client = document.getElementById('edit_client');

        client_header.style.display = 'flex';
        view_client.style.display = 'flex';
        edit_client_detail_header.style.display = 'none';
        edit_client.style.display = 'none';
    }

 
        



       
    
    //show prod details clickign view
 function handleEditClientDetailClick() {

        var view_client = document.getElementById('view_client');
        var client_header = document.getElementById('client_header');
        var edit_client_detail_header = document.getElementById('edit_client_detail_header');
        var edit_client = document.getElementById('edit_client');
     

        // Show prod_detail
        edit_client_detail_header.style.display = 'flex';
       edit_client.style.display ='flex';

        // Hide view_product and InventoryContainer
        view_client.style.display = 'none';
        client_header.style.display = 'none';
    }

    // Get the edit_prod_detail button element
    var edit_client_detail = document.getElementById('edit_client_detail');

    // Add event listener to the edit_prod_detail button
    edit_client_detail.addEventListener('click', handleEditClientDetailClick);
    


// Add a click event listener to each "Archive" menu inside a pet_card
document.querySelectorAll('.pet_card .dropdown-menu.more_button .dropdown-item#Archive').forEach(function (archiveMenu) {
    archiveMenu.addEventListener('click', function (event) {
        // Stop the event from propagating to the parent dropdown, which might hide the dropdown prematurely
        event.stopPropagation();

        // Find the closest parent with the class 'pet_card'
        var petCard = this.closest('.pet_card');

        // Check if a pet_card was found
        if (petCard) {
            // Get the unique ID from the pet_card's data-pet-id attribute
            var petCardId = petCard.dataset.petId;

            // Call the archivePetCard function with the specific petCardId
            archivePetCard(petCardId);
        }
    });
});

    

function archivePetCard(petCardId) {
    var archive_modal2 = document.getElementById('archive_modal-2');

    if (archive_modal2) {
        // Display the modal using Bootstrap's modal methods
        var bootstrapModal = new bootstrap.Modal(archive_modal2);
        bootstrapModal.show();

        // Optionally, you can attach an event listener to the modal's confirm button
        var confirmButton = document.getElementById('archive_confirm_button-2');

        if (confirmButton) {
            confirmButton.addEventListener('click', function () {
                // User confirmed the archiving action
                // Add your logic for this action

                var pet_card = document.getElementById(petCardId);

                if (pet_card) {
                    // Hide or remove the pet_card based on your requirements
                    pet_card.style.display = 'none';

                    // Optionally, you can add an animation or confirmation dialog before archiving
                }

                // Close the archive_modal after archiving
                bootstrapModal.hide();
            });
        }
    }

    // You can add additional logic here to perform any other actions related to archiving
    // For example, you might want to make an API request to update the server that the pet is archived.
}

    




    function handleSuffixChange() {
        var suffix = document.getElementById('suffix');
        var specific_suffix = document.getElementById('specific_suffix');

        if (suffix.value === 'Other') {
            specific_suffix.style.display = 'flex';
        } else {
            specific_suffix.style.display = 'none';
        }
    }



    function addBlurListener(input, error) {
        input.addEventListener("blur", function () {
          if (input.value.trim() === "none") {
            error.style.display = "block";
            input.classList.add("error-border");
          } else if (input.value.trim() === "") {
            error.style.display = "block";
            input.classList.add("error-border");
          } else {
            error.style.display = "none";
            input.classList.remove("error-border");
          }
        });
      }


    
    var firstName = document.getElementById("First_name-1");
    var middleName = document.getElementById("Middle_name-1");
    var lastName = document.getElementById("Last_name-1");
    var suffix = document.getElementById("suffix-1");
    var birthdate = document.getElementById("Client_birthdate-1");
    var sex = document.getElementById("Sex");
    var email = document.getElementById("Client_email-1");
    var user_phone = document.getElementById('User_phone-1');
    
    
    
    //error messages IDs
    var errorFname = document.getElementById('error-first_name-1');
    var errormiddleName = document.getElementById('error-middle_name-1');
    var errorlastName = document.getElementById('error-last_name-1');
    var errorSuffix = document.getElementById('error-suffix-1');
    var errorbirthdate = document.getElementById('error-client_birthdate-1');
    var errorSex = document.getElementById('error-sex'); // Fix the typo here
    var erroremail = document.getElementById('error-client_email-1');
    var erroruser_phone = document.getElementById('error-user_phone-1');
    
    addBlurListener(firstName, errorFname); 
    addBlurListener(middleName, errormiddleName);  
    addBlurListener(lastName, errorlastName);  
    addBlurListener(suffix, errorSuffix);  
    addBlurListener(birthdate, errorbirthdate);  
    addBlurListener(sex, errorSex);  
    addBlurListener(email, erroremail);
    addBlurListener(user_phone, erroruser_phone);

    function clearForm() {
        firstName.value = '';
        middleName.value = '';
        lastName.value = '';
        suffix.value = '';
        birthdate.value = '';
        address.value = '';
        email.value = '';
        user_phone.value = '';
    }
    


    // Assuming you have a button with the class "btn-close"
    var closeButton = document.getElementById('close_addClient');


    // Add click event listener to the close button
    closeButton.addEventListener('click', clearForm);
    
    const today = new Date();
    const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate()).toISOString().split('T')[0];
    const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

    const dateInput = document.getElementById('Client_birthdate-1');
    dateInput.setAttribute('max', maxDate);
    dateInput.setAttribute('min', minDate);

    dateInput.addEventListener('change', function () {
        let selectedDate = new Date(this.value);
        if (selectedDate > today || selectedDate < new Date(today.getFullYear() - 100, today.getMonth(), today.getDate())) {
            this.value = '';
            alert('Please select a date between 18 and 100 years ago.');
        }
        // Additional validation or action can be added here if needed
    });


    dateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });
 
});

    function onFocus() {
        error.style.display = 'none'; // Hide the error message
        guide.style.display = 'flex'; // Show the guide message
        input.classList.remove('is-invalid');
        input.classList.remove('error-border');
    }



function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}

var user_phone = document.getElementById('User_phone-1');

function PhoneNumberInputLimit(inputElement) {
    inputElement.addEventListener('input', function () {
        // Remove any non-digit characters, including 'e'
        this.value = this.value.replace(/[^\d]/g, '');

        // Limit to 11 digits
        if (this.value.length > 11) {
            this.value = this.value.slice(0, 11);
        }

        // Ensure the first two characters are '09'
        if (this.value.length >= 2 && this.value.slice(0, 2) !== '09') {
            // Adjust the input to start with '09'
            this.value = '09' + this.value.slice(2);
        }
    });
}

PhoneNumberInputLimit(user_phone);


        

// Function to check if the value is a valid email format
function isValidEmail(email) {
    var emailRegex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}
 

function setupDateValidation(inputId) {
    const today = new Date();
    const maxDate = new Date(today.getFullYear() - 18, today.getMonth(), today.getDate()).toISOString().split('T')[0];
    const minDate = new Date(today.getFullYear() - 100, today.getMonth(), today.getDate()).toISOString().split('T')[0];

    const dateInput = document.getElementById(inputId);
    dateInput.setAttribute('max', maxDate);
    dateInput.setAttribute('min', minDate);

    dateInput.addEventListener('change', function () {
        let selectedDate = new Date(this.value);
        if (selectedDate > today || selectedDate < new Date(today.getFullYear() - 100, today.getMonth(), today.getDate())) {
            this.value = '';
            alert('Please select a date between 18 and 100 years ago.');
        }
        // Additional validation or action can be added here if needed
    });

    dateInput.addEventListener('keydown', function (e) {
        e.preventDefault();
    });
}

// Example usage for client_birthdate

setupDateValidation('client_birthdate');
