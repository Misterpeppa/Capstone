document.addEventListener('DOMContentLoaded', function () {
    var add_client = document.getElementById('add_client');
    var add_client_btn = document.getElementById('add_client_btn');
    var add_client_btn_1 = document.getElementById('add_client_btn_1');
    var add_pet_btn = document.getElementById('add_pet_btn');
    var archive_button = document.getElementById('archive_button');

    var add_pet_record_modal = new bootstrap.Modal(document.getElementById('add_pet_record_modal'));
    var add_pet_record_modal1 = new bootstrap.Modal(document.getElementById('add_pet_record_modal-1'));
    var add_pet_record_modal2 = new bootstrap.Modal(document.getElementById('add_pet_record_modal-2'));
    var add_client_modal = new bootstrap.Modal(document.getElementById('add_client_modal'));
    var add_client_modal1 = new bootstrap.Modal(document.getElementById('add_client_modal-1'));
    var archive_modal = new bootstrap.Modal(document.getElementById('archive_modal'));
    var archive_modal1 = new bootstrap.Modal(document.getElementById('archive_modal-1'));
    var archive_modal2 = new bootstrap.Modal(document.getElementById('archive_modal-2'));
                
    
    var add_client_success = new bootstrap.Modal(document.getElementById('add_client_success'));
    
    
    var submit_Client = document.getElementById('submit_Client');
  
    add_client.addEventListener('click', function () {
    add_client_modal.show();
        
        
  });
    
    add_client_btn.addEventListener('click', function () {
    add_client_modal1.show();
  });
    
    add_client_btn_1.addEventListener('click', function () {
    add_client_modal1.show();
  });
    
    add_pet_btn.addEventListener('click', function () {
    add_pet_record_modal.show();
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
    var client_table_container = document.getElementById('client_table_container');
    empty_state_container.style.display = 'none';
    client_table_container.style.display = 'flex';

    function showAddClientSplitBtn() {
        var addClientSplitBtn = document.getElementById("add_client_split_btn");
        if (addClientSplitBtn) {
            addClientSplitBtn.style.display = "flex";
        }
    }       
     
    showAddClientSplitBtn();

        //get reference IDs
        var empty_state_container = document.getElementById('empty_state_container');
         var client_table_container = document.getElementById('client_table_container');
        
        
        
    // Get form values
    var firstName = document.getElementById("first_name").value;
    var middleName = document.getElementById("middle_name").value;
    var lastName = document.getElementById("last_name").value;
    var suffix = document.getElementById("suffix").value;
    var birthdate = document.getElementById("client_birthdate").value;
    var address = document.getElementById("client_address").value;
    var email = document.getElementById("client_email").value;
    var phoneNumber = document.getElementById("user_phone").value;


    // Create dropdown container
    var dropdownContainer = document.createElement('div');
    dropdownContainer.className = 'dropdown';

    // Create dropbtn
    var dropbtn = document.createElement('button');
    dropbtn.className = 'dropbtn';
    dropbtn.innerHTML = '<span>Action</span>';

    // Create dropdownContent
    var dropdownContent = document.createElement('div');
    dropdownContent.className = 'dropdown-content';
    dropdownContent.innerHTML = `
           <!-- Group 1 -->
    <div class="button-group">
        <button data-action="Add_Pet"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5672_22512)">
    <path d="M9 12H15M12 9V15M3 12C3 13.1819 3.23279 14.3522 3.68508 15.4442C4.13738 16.5361 4.80031 17.5282 5.63604 18.364C6.47177 19.1997 7.46392 19.8626 8.55585 20.3149C9.64778 20.7672 10.8181 21 12 21C13.1819 21 14.3522 20.7672 15.4442 20.3149C16.5361 19.8626 17.5282 19.1997 18.364 18.364C19.1997 17.5282 19.8626 16.5361 20.3149 15.4442C20.7672 14.3522 21 13.1819 21 12C21 10.8181 20.7672 9.64778 20.3149 8.55585C19.8626 7.46392 19.1997 6.47177 18.364 5.63604C17.5282 4.80031 16.5361 4.13738 15.4442 3.68508C14.3522 3.23279 13.1819 3 12 3C10.8181 3 9.64778 3.23279 8.55585 3.68508C7.46392 4.13738 6.47177 4.80031 5.63604 5.63604C4.80031 6.47177 4.13738 7.46392 3.68508 8.55585C3.23279 9.64778 3 10.8181 3 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5672_22512">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Add Pet</div></button>
        
    </div>
    
    <!-- Line break -->
    <div class="line-break"><svg xmlns="http://www.w3.org/2000/svg" width="166" height="2" viewBox="0 0 166 2" fill="none">
  <path d="M1 1H165" stroke="black" stroke-opacity="0.3" stroke-width="0.8" stroke-linecap="square"/>
</svg></div>
    
    <!-- Group 2 -->
    <div class="button-group">
        <button data-action="View"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22297)">
    <path d="M10 12C10 12.5304 10.2107 13.0391 10.5858 13.4142C10.9609 13.7893 11.4696 14 12 14C12.5304 14 13.0391 13.7893 13.4142 13.4142C13.7893 13.0391 14 12.5304 14 12C14 11.4696 13.7893 10.9609 13.4142 10.5858C13.0391 10.2107 12.5304 10 12 10C11.4696 10 10.9609 10.2107 10.5858 10.5858C10.2107 10.9609 10 11.4696 10 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M21 12C18.6 16 15.6 18 12 18C8.4 18 5.4 16 3 12C5.4 8 8.4 6 12 6C15.6 6 18.6 8 21 12Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22297">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> View</div></button>
        <button data-action="Edit"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22180)">
    <path d="M13.5 6.5L17.5 10.5M4 20.0001H8L18.5 9.50006C19.0304 8.96963 19.3284 8.2502 19.3284 7.50006C19.3284 6.74991 19.0304 6.03049 18.5 5.50006C17.9696 4.96963 17.2501 4.67163 16.5 4.67163C15.7499 4.67163 15.0304 4.96963 14.5 5.50006L4 16.0001V20.0001Z" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22180">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Edit</div></button>
        <button data-action="Archive"><div class="action_button_text"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <g clip-path="url(#clip0_5624_22046)">
    <path d="M19 8C19.5304 8 20.0391 7.78929 20.4142 7.41421C20.7893 7.03914 21 6.53043 21 6C21 5.46957 20.7893 4.96086 20.4142 4.58579C20.0391 4.21071 19.5304 4 19 4H5C4.46957 4 3.96086 4.21071 3.58579 4.58579C3.21071 4.96086 3 5.46957 3 6C3 6.53043 3.21071 7.03914 3.58579 7.41421C3.96086 7.78929 4.46957 8 5 8M19 8H5M19 8V18C19 18.5304 18.7893 19.0391 18.4142 19.4142C18.0391 19.7893 17.5304 20 17 20H7C6.46957 20 5.96086 19.7893 5.58579 19.4142C5.21071 19.0391 5 18.5304 5 18V8M10 12H14" stroke="#1C1C1C" stroke-opacity="0.7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </g>
  <defs>
    <clipPath id="clip0_5624_22046">
      <rect width="24" height="24" fill="white"/>
    </clipPath>
  </defs>
</svg> Archive</div></button>
    </div>
`;
        


    // Add a class for styling the line break
    var lineBreak = document.createElement('div');
    lineBreak.className = 'line-break';

    // Append the line break element to the dropdown content
    dropdownContent.appendChild(lineBreak);

    // Append elements to the dropdown container
    dropdownContainer.appendChild(dropbtn);
    dropdownContainer.appendChild(dropdownContent);

    // Append the dropdown container to the action cell
    actionCell.appendChild(dropdownContainer);
    
    // Optionally, you can add additional logic, such as resetting the form
    document.getElementById("add_client_form").reset();

// Add an event listener for the buttons inside dropdown-content
        document.querySelectorAll('.dropdown-content button').forEach(function (button) {
        button.addEventListener('click', function (event) {
        event.preventDefault();
        const action = this.getAttribute('data-action');
        if (action === 'Add_Pet') {
            // Show the add_pet_record_modal
                            
            add_pet_record_modal.show();

            
        }else if (action === 'View'){
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
    document.querySelectorAll('.dropdown-content').forEach(function (content) {
        content.style.display = 'none';
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
        } else if (content.style.display === 'flex'){
            content.style.display = 'none';
        }else {
            content.style.display = 'flex';
        }
    });
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
    
    var add_pet_success = new bootstrap.Modal(document.getElementById('add_pet_success'));
    
    
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
        const view_client = document.getElementById('view_client');
        const edit_client_detail_header = document.getElementById('edit_client_detail_header');
        const edit_client = document.getElementById('edit_client');

        client_header.style.display = 'flex';
        view_client.style.display = 'flex';
        edit_client_detail_header.style.display = 'none';
        edit_client.style.display = 'none';
    }
    
    
function setupBreedOptions(petTypeId, breedId, breedOptions) {
    // Get references to the pet type and breed select elements
    var petTypeSelect = document.getElementById(petTypeId);
    var breedSelect = document.getElementById(breedId);

    // Event listener for the pet type select change event
    petTypeSelect.addEventListener('change', function () {
        // Enable the breed select and clear its options
        breedSelect.disabled = false;
        breedSelect.innerHTML = '<option value="" selected>Select a Breed</option>';

        // Get the selected pet type
        const selectedPetType = petTypeSelect.value;

        // Add breed options based on the selected pet type
        if (breedOptions.hasOwnProperty(selectedPetType)) {
            addBreedOptions(breedOptions[selectedPetType]);
        }
    });

    // Function to add breed options to the breed select element
    function addBreedOptions(breeds) {
        breeds.forEach(function (breed) {
            var option = document.createElement('option');
            option.value = breed;
            option.text = breed;
            breedSelect.appendChild(option);
        });
    }
}

// Example usage for the first set of IDs and breed options
setupBreedOptions('pet_type', 'breed', {
    'Dog': ['Labrador', 'Golden Retriever', 'German Shepherd'],
    'Cat': ['Siamese', 'Persian', 'Maine Coon']
});

// Example usage for the second set of IDs and breed options
setupBreedOptions('pet_type-1', 'breed-1', {
    'Dog': ['Bulldog', 'Poodle', 'Beagle'],
    'Cat': ['Ragdoll', 'Sphynx', 'Bengal']
});

// Example usage for the third set of IDs and breed options
setupBreedOptions('pet_type-2', 'breed-2', {
    'Dog': ['Dachshund', 'Shih Tzu', 'Boxer'],
    'Cat': ['Scottish Fold', 'Exotic Shorthair', 'Abyssinian']
});

    
function setupAgeCalculation(birthdateId, ageId, petTypeId) {
    var birthdateInput = document.getElementById(birthdateId);
    var ageInput = document.getElementById(ageId);
    var petTypeSelect = document.getElementById(petTypeId);

    birthdateInput.addEventListener('change', function () {
        var selectedBirthdate = new Date(birthdateInput.value);
        var petType = petTypeSelect.value;

        if (petType === '' || !selectedBirthdate) {
            ageInput.value = '';
        } else {
            var age = calculateAge(selectedBirthdate, petType);
            ageInput.value = age;
            ageInput.placeholder = 'Please select pet type and enter the birthdate first'; // Clear the placeholder
            document.getElementById('error-' + ageInput.id).innerText = ''; // Clear the error message
        }
    });

    function calculateAge(birthdate, petType) {
        var today = new Date();
        var age;

        if (petType === 'Dog') {
            age = calculateDogAge(birthdate, today);
        } else if (petType === 'Cat') {
            age = calculateCatAge(birthdate, today);
        } else {
            age = calculateDefaultAge(birthdate, today);
        }

        return age;
    }

    function calculateDogAge(birthdate, today) {
        var ageInMilliseconds = today - birthdate;
        var ageInDogYears;

        if (ageInMilliseconds < 2 * 365 * 24 * 60 * 60 * 1000) {
            ageInDogYears = ageInMilliseconds / (365 * 24 * 60 * 60 * 1000) * 10.5;
        } else {
            ageInDogYears = 2 * 10.5 + (ageInMilliseconds - 2 * 365 * 24 * 60 * 60 * 1000) / (365 * 24 * 60 * 60 * 1000) * 4;
        }

        return Math.floor(ageInDogYears);
    }

    function calculateCatAge(birthdate, today) {
        var ageInMilliseconds = today - birthdate;
        var ageInCatYears;

        if (ageInMilliseconds < 2 * 365 * 24 * 60 * 60 * 1000) {
            ageInCatYears = ageInMilliseconds / (365 * 24 * 60 * 60 * 1000) * 12;
        } else {
            ageInCatYears = 2 * 12 + (ageInMilliseconds - 2 * 365 * 24 * 60 * 60 * 1000) / (365 * 24 * 60 * 60 * 1000) * 4;
        }

        return Math.floor(ageInCatYears);
    }

    function calculateDefaultAge(birthdate, today) {
        var ageInMilliseconds = today - birthdate;
        return Math.floor(ageInMilliseconds / (365 * 24 * 60 * 60 * 1000));
    }
}

// Example usage for the first set of IDs
setupAgeCalculation('pet_birthdate', 'age', 'pet_type');

// Example usage for the second set of IDs
setupAgeCalculation('pet_birthdate-1', 'age-1', 'pet_type-1');

// Example usage for the third set of IDs
setupAgeCalculation('pet_birthdate-2', 'age-2', 'pet_type-2');

       
    
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
    
    

    var submit_pet = document.getElementById('submit_pet');
    var pet_empty_state_container = document.getElementById('pet_empty_state_container');
    var pet_card_container = document.getElementById('pet_card_container');
    var add_pet_button = document.getElementById('add_pet_button');

    submit_pet.addEventListener('click', function () {

        pet_empty_state_container.style.display = 'none';
        pet_card_container.style.display = 'flex';
        add_pet_button.style.display = 'flex';
        add_pet_record_modal.hide();
        add_pet_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);
    });
    
    var submit_pet1 = document.getElementById('submit_pet-1');

    submit_pet1.addEventListener('click', function () {

        pet_empty_state_container.style.display = 'none';
        pet_card_container.style.display = 'flex';
        add_pet_button.style.display = 'flex';
        add_pet_record_modal1.hide();
        add_pet_success.show();
        // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);
    });

    add_pet_button.addEventListener('click', function () {
        add_pet_record_modal2.show();
    });

    var submit_pet2 = document.getElementById('submit_pet-2');

    var petCounter = 1; // Counter to keep track of the number of pet cards

submit_pet2.addEventListener('click', function() {
    
    add_pet_success.show();
    // Hide the modal after 2000 milliseconds (2 seconds)
        setTimeout(function () {
            add_pet_success.hide();
        }, 2000);
    // Clone the original pet_card
    var newPetCard = pet_card.cloneNode(true);

    // Modify the ID of the new pet_card
    newPetCard.id = 'pet_card_' + petCounter;

    // Set a unique data-pet-id attribute for the new pet_card
    newPetCard.dataset.petId = 'pet_card_' + petCounter;

    // Append the new pet_card to the container
    pet_card_container.appendChild(newPetCard);

    // update other attributes or content of the new pet_card if needed

    // Increment the counter for the next iteration
    petCounter++;
    
    pet_empty_state_container.style.display = 'none';
        pet_card_container.style.display = 'flex';
        add_pet_button.style.display = 'flex'
    // Assuming add_pet_record_modal2 is a Bootstrap modal, you can hide it
    add_pet_record_modal2.hide();
});

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
    
function setupFormValidation(inputIds, buttonId, clearButtonId) {
    var inputs = inputIds.map(id => document.getElementById(id));
    var submitButton = document.getElementById(buttonId);
    var clearButton = document.getElementById(clearButtonId);

    // Function to check if all required input fields have values
    function areAllInputsFilled() {
        return inputs.every(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, check if a valid option is selected
                return input.options[input.selectedIndex].value.trim() !== '';
            } else {
                // For other input types, check if the value is present
                return input.value.trim() !== '';
            }
        });
    }

    // Disable the submit button by default
    submitButton.disabled = true;

    // Add an event listener to each input field for the 'input' event
    inputs.forEach(input => input.addEventListener('input', enableSubmitButton));

    function enableSubmitButton() {
        // Enable or disable the submit button based on the condition
        submitButton.disabled = !areAllInputsFilled();
    }

    // Add an event listener to the submit button for the 'click' event
    submitButton.addEventListener('click', function () {
        console.log("Submit button clicked!");
        // Add your logic for handling the form submission
        // For example, you can call a function to process the form data

        // Reset all input fields
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, set the selectedIndex to the default one
                input.selectedIndex = 0;
            } else {
                // For other input types, set the value to an empty string
                input.value = '';
            }
        });

        // Disable the submit button after submission
        submitButton.disabled = true;
    });

    // Add an event listener to the clear button for the 'click' event
    clearButton.addEventListener('click', function () {
        console.log("Clear button clicked!");
        // Clear all input fields
        inputs.forEach(input => {
            if (input.tagName === 'SELECT') {
                // For select elements, set the selectedIndex to the default one
                input.selectedIndex = 0;
            } else {
                // For other input types, set the value to an empty string
                input.value = '';
            }
        });

        // Disable the submit button after clearing
        submitButton.disabled = true;
    });

    // Disable or enable the submit button based on the initial state of the form
    submitButton.disabled = !areAllInputsFilled();
}


// Example usage for the first set of inputs, submit button, and clear button
setupFormValidation(
    ['first_name', 'middle_name', 'last_name', 'client_birthdate', 'client_address', 'client_email', 'user_phone'],
    'submit_Client',
    'clear_form'
);

// Example usage for the second set of inputs, submit button, and clear button
setupFormValidation(
    ['first_name-1', 'middle_name-1', 'last_name-1', 'client_birthdate-1', 'client_address-1', 'client_email-1', 'user_phone-1'],
    'submit_Client-1',
    'clear_form-1'
);

// Example usage for the third set of inputs, submit button, and clear button
setupFormValidation(
    ['pet_name', 'pet_type', 'breed', 'gender', 'pet_birthdate', 'age', 'weight', 'sterilization_status'],
    'submit_pet',
    'clear_form-2'
);

// Example usage for the fourth set of inputs, submit button, and clear button
setupFormValidation(
    ['pet_name-1', 'pet_type-1', 'breed-1', 'gender-1', 'pet_birthdate-1', 'age-1', 'weight-1', 'sterilization_status-1'],
    'submit_pet-1',
    'clear_form-3'
);

// Example usage for the fifth set of inputs, submit button, and clear button
setupFormValidation(
    ['pet_name-2', 'pet_type-2', 'breed-2', 'gender-2', 'pet_birthdate-2', 'age-2', 'weight-2', 'sterilization_status-2'],
    'submit_pet-2',
    'clear_form-4'
);



    function handleSuffixChange() {
        var suffix = document.getElementById('suffix');
        var specific_suffix = document.getElementById('specific_suffix');

        if (suffix.value === 'Other') {
            specific_suffix.style.display = 'flex';
        } else {
            specific_suffix.style.display = 'none';
        }
    }


 
});

$(document).ready(function () {
    // Make an AJAX request to get data from the controller
    $.ajax({
      url: '/admin/inventory', 
      method: 'GET', 
      success: function (dataExists) {
          if (dataExists) {
              // If there is data, hide the empty state container
              $("#empty_state_container").hide();

              // Show the product table and apply the display: flex property
              $("#product_table_container").show();
              split_btn.style.display = "flex";
          }

          // Other logic to handle and display the data as needed
      },
      error: function () {
          console.error('Error in AJAX request.');
      }
  });
    //divs will appear after hitting submit_product button
    $("#submit_Client-1").click(function () {
        var formData = $("#add_client_form-1").serialize();

        // Make an AJAX request
        $.ajax({
            url: '/admin/client', // Replace with your actual route URL
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.success) {
                    console.log('Form data submitted successfully.');
                } else {
                    console.error('Data submission failed.');
                }
            },
            error: function () {
                console.error('Error in AJAX request.');
            }
        });
     
      // Show the add_product_success and hide it after 3 seconds
      add_client_modal.hide();
      add_client_success.show();
      // Hide the modal after 2000 milliseconds (2 seconds)
      setTimeout(function () {
          add_client_success.hide();
      }, 2000);
    });

});
